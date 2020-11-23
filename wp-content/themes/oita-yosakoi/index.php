<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ooita-yosakoi
 */

get_header();
?>
<main class="main">
    <div class="top-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/img/main-image.jpeg">
    </div>
    <section class="news-area">
        <h2>NEWS</h2>
        <?php
         $args = array(
         'post_type' => 'info', 
         'posts_per_page' => 5,
         );
        ?>
        <?php $query = new WP_Query( $args ); ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <!-- ▽ ループ開始 ▽ -->
        <?php the_field('info_category'); ?>
        <!-- △ ループ終了 △ -->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <div class="news-contents">
            <ul>
                <li><span><?php the_date(); ?></span><?php the_title(); ?></li>
            </ul>
        </div>
    </section>
    <h2 class="area-title">杏葉について</h2>
    <section class="contents">
        <a class="contents-icon" href="/wp-yosakoi/about/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about-image.jpeg" alt="踊っている写真">
            <h3>概要</h3>
        </a>

        <a class="contents-icon" href="/wp-yosakoi/recruit/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/wanted.jpeg" alt="空の写真">
            <h3>メンバー募集</h3>
        </a>

        <a class="contents-icon" href="/wp-yosakoi/dance/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/works-image.jpeg" alt="踊っている人たち">
            <h3>演舞一覧</h3>
        </a>
    </section>
    <h2 class="question-title">Q&A</h2>
    <section class="question">
        <dl id="question-list">
            <dt>初心者でも参加出来ますか？ <span class="opened">▽</span></dt>
            <dd>初心者の方でも経験者の方でもやる気のある方であれば大歓迎です。<br>
                大分においてはよさこいの経験者の方が少ないと思います。<br>
                そのため初心者の方であっても踊れるようになるため、こちらも全力で応援させて頂きます。<br>
                「メンバー募集」にある募集要項等に同意頂けてどまつりを目指して共に切磋琢磨できる方でありましたら<br>
                どうぞ、ご参加ください。<br>
                最初は踊りの上手い下手などは特に気にしなくて大丈夫ですのでご安心ください。
            </dd>
            <dt>他県に支部を設けたりしますか? <span class="opened">▽</span></dt>
            <dd>申し訳ございません。杏葉は大分市を拠点としているため、現時点では他県に支部を設けておりません。<br>
                しかし、今後は他県のメンバーの数が一定数を超えるなどある程度条件を満たしたら福岡などでの支部も<br>
                検討していく予定です。
            </dd>
            <dt>他の県からも参加できますか？ <span class="opened">▽</span></dt>
            <dd>既に他の県からのメンバーも数名いますので、参加可能です。</dd>
            <dt>ど祭りに参加するのですか？ <span class="opened">▽</span></dt>
            <dd>ど祭り参加は佐世保で大賞を取ってからとなります。</dd>
            <dt>どの祭りに参加しますか？ <span class="opened">▽</span></dt>
            <dd>参加する祭りは、以下の通りです。<br>
                ３月熊本：九州がっさい<br>
                ７月熊本：さのよいファイヤーカーニバル<br>
                10月福岡：かすやYOSAKOI祭り<br>
                　　長崎：YOSAKOI佐世保祭り<br>
                その他、随時大分県内の地域イベント等
            </dd>

        </dl>
    </section>
    <!-- <h2 class="sns">SNS</h2> -->
    <!-- <section class="sns-contents"> -->
    </section>
</main>


<?php
get_footer();