<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<meta itemprop="name" content="Latin Rogue Cleaning Services">
<meta property="og:image" content="<? bloginfo('template_directory'); ?>/images/opengraph.jpg" />
<meta itemprop="description" content="Latin Rogue Cleaning... A Clean Sweep!">
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<!--[if IE ]><link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory'); ?>/ie.css"><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory'); ?>/ie-ancient.css"><![endif]-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="<? bloginfo('template_directory'); ?>/jquery.cycle.js"></script>
<script src="<? bloginfo('template_directory'); ?>/global.js"></script>
<script src="<? bloginfo('template_directory'); ?>/modernizr-2.0.6.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="opl"><a href="http://onepagelove.com/latin-rogue-cleaning-services" target="_blank">Your Site Name featured on One Page Love</a></div>

<div class="top">
<a name="top" id="top"></a>
<nav class="mobile-only"><? wp_nav_menu('menu=main'); ?></nav>
	<header>
    <a class="logo" href="<? bloginfo('url'); ?>" title="Click Here For A Free Quote"><img src="<? bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
    <nav class="desktop-only"><? wp_nav_menu('menu=main'); ?></nav>
    
        <div class="absolute"><img src="<? bloginfo('template_directory'); ?>/images/latinrogue.png" class="latinrogue" alt=""></div>
        
    	<h2>Make Your World as</h2>
        <h1>Clean As Mine</h1>
        
        <? query_posts('page_id=9'); ?>    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_query(); ?>

		<a class="btn" href="<? bloginfo('url'); ?>/#quote">Get A Free Quote</a>
    </header>
</div>
