<?php
get_header();
?>

<div class="wrapper">
	<div class="main">
        <div id="post-<?php the_ID(); ?>" class="user-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        
        <?php the_content(); ?>
        
        <?php comments_template(); ?>
    
        <?php endwhile; endif; ?>
        </div>
    </div><!-- end main -->
</div><!-- end wrapper -->

<?php get_footer(); ?>
