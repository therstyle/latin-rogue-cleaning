<?php get_header(); ?>

<div class="wrapper">
	<div class="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><a href="<? the_permalink(); ?>" title="<? the_title(); ?>"><?php the_title(); ?></a></h1>
            
    <?php the_content(); ?>
        
    <?php endwhile; endif; ?>
    </div><!-- end main -->
</div><!-- end wrapper -->    
	
<?php get_footer(); ?>