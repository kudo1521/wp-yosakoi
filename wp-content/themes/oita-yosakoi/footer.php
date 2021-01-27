<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ooita-yosakoi
 */

?>
<?php if(!is_page('contact')): ?>
    <a class="banner" href=“/wp-yosakoi/contact/“><p>お問い合わせ</p></a>
<?php endif; ?>
<footer>
    <h1>©️杏葉</h1>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script> 
</body>
</html>
