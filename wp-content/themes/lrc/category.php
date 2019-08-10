<?php get_header(); ?>

<div class="wrapper">
	<div class="main">
        <div class="wrap">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
            <div id="post-<?php the_ID(); ?>" class="post">
            <h1><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><?php the_title(); ?></a></h1>
            <?php the_content(); ?>
            </div>
    
        <?php endwhile; endif; ?>
        </div>
    </div><!-- end main -->
</div><!-- end wrapper -->    
	
<?php get_footer(); ?>
