<?php
/* Template Name: Home
*/
get_header();
?>

<div class="about">
<a name="about" id="about"></a>
	<section>
    	<article>
        	<div class="about-left">
            <img src="<? bloginfo('template_directory'); ?>/images/icons/dustpan.png" title="Why Latin Rogue Is A Clean Sweep" alt="" />
            </div>

            <div class="about-right">
            <header>
            <h2>why latin rogue</h2>
    		<h1>is a clean sweep</h1>
            </header>
			<? query_posts('page_id=11'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </article>
	</section>

    <div class="divider"></div>
</div>

<div class="services">
<a name="services" id="services"></a>
	<section>
    	<article class="services-summary">
        	<header><h1>Services</h1></header>
            <? query_posts('page_id=14'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <article class="kitchen">
            <? query_posts('page_id=16'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header><h2><? the_title(); ?></h2></header>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <article class="bathroom">
            <? query_posts('page_id=18'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header><h2><? the_title(); ?></h2></header>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <article class="all-rooms">
            <? query_posts('page_id=20'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header><h2><? the_title(); ?></h2></header>
            <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <a name="contact" id="contact"></a>
        <div class="call-wrap">
        	<div class="absolute">
            <a class="call" href="tel:520-256-4237" title="To find out more about Latin Rogue Cleaning's rates or services call (757) 812-3603 today!">(757) 812-3603</a>
            </div>
        </div>

        <!--<a class="click" href="#quote" title="Click Here For An Online Quote"></a>-->
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
<a name="quote" id="quote"></a>
	<section>
    	<article class="quote-left">
        	<header>
            <h1>free quote</h1>
        	<h2>You're Minutes Away from a free estimate!</h2>
            </header>
        <? query_posts('page_id=26'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_query(); ?>
        </article>

        <!--<form class="quote-right" action="<? $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" placeholder="Name" name="name" />
        <input type="text" placeholder="Email Address" name="email" />
        <input type="text" placeholder="Street Address" name="street" />
        <input type="text" value="Virginia" class="state" disabled="disabled" name="state" />
        <input type="text" class="zip" placeholder="City" name="city" />
        <input type="text" placeholder="Comments" class="textarea" name="comments" />
        <input type="submit" class="submit" value="submit" />-->

        <div class="quote-right">
		<?php //if (function_exists('serveCustomContactForm')) { serveCustomContactForm(1); } ?>

        <!--<form method="post" action="">
        <input type="text" placeholder="Name" name="name" />
        <input type="text" placeholder="Email Address" name="email" />
        <input type="text" placeholder="Street Address" name="street" />
        <input type="text" value="Virginia" class="state" disabled="disabled" name="state" />
        <input type="text" class="zip" placeholder="Zip" name="zip" />
        <input type="text" placeholder="City" name="city" />
        <input type="text" placeholder="Comments" class="textarea" name="comments" />
        <input type="submit" class="submit" value="submit" />

        <input type="hidden" name="ccf_customhtml" value="1" />
        <input type="hidden" name="success_message" value="Thank you for filling out our form!" />
        <input type="hidden" name="destination_email" value="latinroguecleaning@gmail.com " />
        <input type="hidden" name="required_fields" value="email" />

</form>

        <span>Latin Rogue Cleaning currently only serves the Virginia area.</span>-->

        <?php echo do_shortcode('[formidable id=2]'); ?>

        </div>

        <? /*
		$to = 'therstyle@gmail.com';
		$from = 'From: '.$_POST['email'];
		$subject = 'Email submission from website';
		$message = '

		Name = '.$_POST['name'].'
		Email = '.$_POST['email'].'
		Street = '.$_POST['street'].'
		State = '.$_POST['state'].'
		Zip = '.$_POST['zip'].'
		Comments = '.$_POST['comments'].'

		';

		if ($_POST['email'] != NULL)
			{
			echo 'Thank you, we will get back to you shortly.';
			mail('latinroguecleaning@gmail.com ', 'subject', 'message', 'From: '.$_POST['email']);
			}
		*/?>

        <!--<span>Latin Rogue Cleaning currently only serves the Virginia area.</span>-->

    </section>

    <?php get_footer(); ?>
</div>
