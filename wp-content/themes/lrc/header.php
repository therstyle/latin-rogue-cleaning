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

<body <?php body_class(); ?>>
    <div class="opl">
        <a href="http://onepagelove.com/latin-rogue-cleaning-services" target="_blank">Latin Rogue Cleaning featured on One Page Love</a>
    </div>

    <a class="scroll-anchor" id="top"></a>
    <div class="top">
        <nav class="mobile-only">
            <?php wp_nav_menu('menu=main'); ?>
        </nav>
        
        <header>
            <a class="logo" href="<?php echo bloginfo('url'); ?>" title="Click Here For A Free Quote">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
            </a>

        <nav class="desktop-only">
            <?php wp_nav_menu('menu=main'); ?>
        </nav>
        
        <div class="absolute">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/latinrogue.png" class="latinrogue" alt="">
        </div>
            
        <h2>Make Your World as</h2>
        <h1>Clean As Mine</h1>
        
        <?php query_posts('page_id=9'); ?>    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_query(); ?>

        <a class="btn" href="<?php echo bloginfo('url'); ?>/#quote">Get A Free Quote</a>
        </header>
    </div>
