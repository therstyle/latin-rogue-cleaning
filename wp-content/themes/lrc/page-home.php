<?php
/* Template Name: Home
*/
get_header();
?>

<a class="scroll-anchor" id="about"></a>
<div class="about">
	<section>
    	<article>
        	<div class="about-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/dustpan.png" alt="Why Latin Rogue Is A Clean Sweep" />
            </div>

            <div class="about-right">
            <header>
            <h2>why latin rogue</h2>
    		<h1>is a clean sweep</h1>
            </header>
			<?php query_posts('page_id=11'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </article>
	</section>

    <div class="divider"></div>
</div>

<a class="scroll-anchor" id="services"></a>
<div class="services">
	<section>
    	<article class="services-summary">
        	<header><h1>Services</h1></header>
            <?php query_posts('page_id=14'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <article class="kitchen">
            <?php query_posts('page_id=16'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header><h2><?php the_title(); ?></h2></header>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <article class="bathroom">
            <?php query_posts('page_id=18'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header><h2><?php the_title(); ?></h2></header>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <article class="all-rooms">
            <?php query_posts('page_id=20'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header><h2><?php the_title(); ?></h2></header>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <a class="scroll-anchor" id="contact"></a>
        <div class="call-wrap">
        	<div class="absolute">
            <a class="call" href="tel:520-256-4237" title="To find out more about Latin Rogue Cleaning's rates or services call (757) 812-3603 today!">(757) 812-3603</a>
            </div>
        </div>

        <div class="quotes">
        	<div>
            <p>Latin Rogue Cleaning is, without a doubt, the most responsive cleaning service I have ever used in all my years of property and facilities management services. They respond quickly unlike many of their competitors and the service is always first rate.</p>
<p class="quote-name">Jim Stevenson</p>
            </div>

            <div>
            <p>I have used several cleaning companies for my offices but nobody is as reliable and consistent as Latin Rogue Cleaning Services. They are the best. </p>
<p class="quote-name">Susan Black</p>
            </div>

            <div>
            <p>Latin Rogue Cleaning is a lifesaver! Without them I wouldn't have had the time (or the energy) to throw my sister's baby shower! Thanks to Latin Rogue Cleaning my party was a success!</p>
<p class="quote-name">Lisa Turner</p>
            </div>
        </div>
    </section>
</div>

<div class="bottom">
<a class="scroll-anchor" id="quote"></a>
	<section>
    	<article class="quote-left">
        	<header>
            <h1>free quote</h1>
        	<h2>You're Minutes Away from a free estimate!</h2>
            </header>
        <?php query_posts('page_id=26'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <div class="quote-right">
            <?php echo do_shortcode('[formidable id=2]'); ?>
        </div>
    </section>

    <?php get_footer(); ?>
</div>
