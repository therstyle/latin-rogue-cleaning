<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?>>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
    <meta itemprop="name" content="Latin Rogue Cleaning Services">
    <meta property="og:image" content="<? bloginfo('template_directory'); ?>/images/opengraph.jpg" />
    <meta itemprop="description" content="Latin Rogue Cleaning... A Clean Sweep!">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
    <?php wp_head(); ?>
  </head>

  <?php
  $logo = get_field('logo', 'option');
  ?>

  <body <?php body_class(); ?>>
    <div class="opl">
      <a href="http://onepagelove.com/latin-rogue-cleaning-services" target="_blank">Latin Rogue Cleaning featured on One Page Love</a>
    </div>

    <header class="main">
      <div class="wrapper">
        <a class="logo" href="<?php echo bloginfo('url'); ?>" title="Click Here For A Free Quote">
          <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
        </a>

        <nav>
          <?php wp_nav_menu(array('theme_location' => 'main')); ?>
        </nav>
      </div>
    </header>
