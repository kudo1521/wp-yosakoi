<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ooita-yosakoi
 */

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="大分からどまつり出場を目指すチームとして2020年に発足しました、どまつりよさこいチーム杏葉と申します。
    演舞に無限の可能性を常に追い求め、この先ずっと地域から愛され、歩みが続いていくチームになるよう努めて参ります。">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sub.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <title>よさこい　杏葉</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
</head>

<body>

    <header class="header">
        <h1><a href="index.html">杏葉</a></h1>
        <nav class="pc-menu">
            <ul>
                <li><a href="/wp-yosakoi/">ホーム</a></li>
                <li><a href="/wp-yosakoi/about/">概要</a></li>
                <li><a href="/wp-yosakoi/recruit/">メンバー募集</a></li>
                <li><a href="/wp-yosakoi/dance/">演舞一覧</a></li>
            </ul>
        </nav>
        <script>
            var url = location.pathname;
            $(".pc-menu"+url).addClass('carrent');
        </script>
        <div id="nav-drawer">
            <input id="nav-input" type="checkbox" class="nav-unshown">
            <label id="nav-open" for="nav-input"><span></span></label>
            <label class="nav-unshown" id="nav-close" for="nav-input"></label>
            <div id="nav-content" class="media-header">
                <nav class="sp-menu">
                    <ul>
                        <li><a href="index.html">ホーム</a></li>
                        <li><a href="about.html">概要</a></li>
                        <li><a href="about2.html">メンバー募集</a></li>
                        <li><a href="about3.html">演舞一覧</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php if( !(is_home() || is_front_page() )): ?>
    <div class="breadcrumb-area">
        <?php
            if ( function_exists( 'bcn_display' ) ) {
                bcn_display();
            }
            ?>
    </div>
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>