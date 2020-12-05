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
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact-image.png">
    </div>

	<main id="primary" class="site-main">
	<h2 class="contact-title">お問い合わせ</h2>
	<section class="contact">
			<p>杏葉webサイトをご覧頂きありがとうございます。<br>
			メンバー募集に関するお問い合わせ、演舞依頼、その他ご質問等は以下の質問フォームよりお願いします。
		</p>
        </section>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php

get_footer();
