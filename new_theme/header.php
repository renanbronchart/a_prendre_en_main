<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>
<body>
    <div class="header">
        <div class="wrap">
            <a href="<?php bloginfo('url'); ?>" class="logo">Logo</a>
            <div class="menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'nav'
                )); ?>
            </div>
        </div>
    </div>
    <div class="cb"></div>
            <div class="wrap">
                <div class="container">
  <div class='teams'>
    <?php
      $loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => 10 ) );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>

    <div class='team'>
      <h2>
        <?php the_title(); ?>
      </h2>
      <div class='description'>
        <?php the_content(); ?>
      </div>
    </div>

    <?php
      endwhile;
    ?>

  </div>
