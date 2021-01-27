<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ooita-yosakoi
 */

?>
<div class="top-wrapper">
<?php if(is_page('about')): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/aboutpage-image.jpeg">
		<?php elseif(is_archive('dance')):?>
		<img src="<?php echo get_template_directory_uri(); ?>/img/workspage-image.jpeg">
		<?php elseif(is_page('recruit')): ?>
		<img src="<?php echo get_template_directory_uri(); ?>/img/wantedpage-image.jpeg">
		<?php elseif(is_page('contact')): ?>
		<img src="<?php echo get_template_directory_uri(); ?>/img/contact-image.png">
		<?php endif;?>
    </div>