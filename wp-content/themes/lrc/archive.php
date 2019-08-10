<?php get_header(); ?>

<div class="wrapper">
	<div class="main">
    <h1><? wp_title(); ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" class="user-content">
        <h1><?php the_title(); ?></h1>
                
        <?php the_content(); ?>
        </div>   
    <?php endwhile; endif; ?>
        <div class="navigation"><?php next_posts_link('Previous entries') ?><?php previous_posts_link('Next entries') ?></div>
    </div><!--end main -->
</div> <!-- end wrapper -->
	
<?php get_footer(); ?>
