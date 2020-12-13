<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ooita-yosakoi
 */

get_header();
?>
<div class="top-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/img/wantedpage-image.jpeg">
    </div>
    <main class="main">
        <h2 class="wanted-title">募集要項</h2>
        <section class="wanted-about">
            <p class="target"><span>募集対象</span><br>
                ・入部の段階で18歳以上30歳未満の男女<br>
                ・一社会人として、杏葉の一員として、礼儀やマナーを守り、責任と節度のある行動のとれる方（学生も同様）<br>
                ・練習や祭りなど、チームの活動に積極的に参加し、一生懸命取り組んでいただける方<br>
                ・よさこい、ダンスの経験の有無は問いません<br>
                ・面談の際に提示致します杏葉の規約に同意頂ける方
            </p>
            <p class="fee"><span>年会費</span><br>
                学生　：毎月 1000円<br>
                社会人：4~5月に12,000円<br>
                ※上記は学生と社会人で年会費の集め方が一部異なるのみで、いずれも年会費12,000円という額は変わりません。<br>
                その他、個人ごとに衣装代・祭り参加のための交通費など別途ご負担頂く費用がございます。
            </p>
        </section>
        <h2 class="practice-title">練習日程</h2>
        <section class="prectice-about">
            <p class="daily"><span>通常練習</span><br>
                毎週<br>
                水曜日：19時〜21時<br>
                土曜日：15時〜18時
            </p>
            <p class="must"><span>絶対練習</span><br>
                YOSAKOI佐世保祭りの２週間前の練習については、一部練習日程が変更となります。<br>
                水曜日：19時〜21時の通常練習に加えて<br>
                土曜日・日曜日：10時〜16時の絶対練習が入ります。<br>
                原則この土曜日、日曜日の練習は絶対参加となります。
            </p>
        </section>
        <h2 class="admission-title">入部までの流れ</h2>
        <section class="admission">
            <p>
                上記の募集要項等を確認の上、入部を希望される方は杏葉webサイトのお問い合わせか杏葉公式ツイッターのDMより<br>
                ご連絡願います。<br>
                後日、担当より面談の日時に関するご連絡を差し上げますので、日程調整の上面談を行います。<br>
                面談の際に、より詳細なチームの規約や守ってほしいルール事項・チームの展望などを説明しますので、<br class="pc">
                それを踏まえて最終的に入部するかどうかを判断してください。
            </p>
            <p>
                面談を行ったからと言って必ず入部しなければならないものではありませんので、杏葉のことを詳しく知りたいと<br class="pc">
                いった方は遠慮なくご連絡ください。また、随時お問い合わせ及び公式ツイッターのDMの方でご質問にお答えします<br class="pc">
                ので、面談をするほどはないが、気になるから教えてほしいといったご質問でも遠慮なくどうぞ。<br>
                ※面談時、もしくは入部後にチームの意向（マナーを守る等）に合致しないような状態が見受けられましたら<br class="pc">
                場合によっては、入部をお断りさせて頂くことがございますので予めご了承願います。
            </p>
        </section>
    </main>
<?php
get_footer();
