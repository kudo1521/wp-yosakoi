<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ooita-yosakoi
 */

get_header();
?>
<?php get_template_part('template-parts/content', 'page-header'); ?>
<main class="main">
  <h2 class="dance-title">演舞一覧</h2>
  <section class="dance-contents">
    <?php
         $paged = get_query_var('paged') ?: 1;
         $args = array(
         'post_type' => 'dance', 
         'posts_per_page' => 3,
         'paged' => $paged
         );
        ?>
    <?php $query = new WP_Query( $args ); ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <!-- ▽ ループ開始 ▽ -->
    <a class="dance-content" href="<?php the_permalink(); ?>">
      <h2 class="dance-name">
        <?php the_field('dance-name'); ?>
      </h2>
      <?php if(get_field('dance-image')): ?>
      <img class="dance-image" src="<?php the_field('dance-image'); ?>" alt="">
      <?php else: ?>
      <img class="dance-image" src="<?php echo get_template_directory_uri(); ?>/img/team-image.jpeg" alt="">
      <?php endif; ?>
      <p class="dance-theme">
        <?php the_field('dance-theme'); ?>
      </p>
    </a>
    <!-- △ ループ終了 △ -->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </section>
  <?php wp_pagenavi(); ?>
</main>
<?php
get_footer();