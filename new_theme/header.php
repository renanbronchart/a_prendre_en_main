<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
    <meta charset='<?php bloginfo( 'charset' ); ?>' />
    <link rel='profile' href='http://gmpg.org/xfn/11' />
    <link rel='stylesheet' type='text/css' media='all' href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.min.css" />
    <link rel='pingback' href='<?php bloginfo( 'pingback_url' ); ?>' />

    <!-- vendor script js -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js'></script>
    <!-- script js -->

</head>
<body>
    <div class='header'>
        <div class='wrap'>
            <a href='<?php bloginfo('url'); ?>' class='logo'>Logo</a>
            <div class='menu'>
                <?php wp_nav_menu(array(
                    'theme_location' => 'nav'
                )); ?>
            </div>
        </div>
    </div>
    <div class='cb'></div>
            <div class='wrap'>
                <div class='container'>
                  <?php include('team.php') ?>
