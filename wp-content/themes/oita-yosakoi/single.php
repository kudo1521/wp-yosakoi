<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ooita-yosakoi
 */

get_header();
?>
<main>
    　<h2 class="single-dance-name">
        <?php the_title(); ?>
    </h2>
    <?php if(get_field('dance-image')): ?>
        <img class="single-dance-image" src="<?php the_field('dance-image'); ?>" alt="">
        <?php else: ?>
            <img class="single-dance-image" src="<?php echo get_template_directory_uri(); ?>/img/team-image.jpeg" alt="">
            <?php endif; ?>
    <div class="single-dance-content">
        <?php the_content(); ?>
    </div>
    <div class="single-dance-video-wrap">
        　<?php the_field('dance-video'); ?>
    </div>
</main>
<?php
get_footer();