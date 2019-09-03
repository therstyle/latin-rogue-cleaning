<main>
  <?php if(have_posts()): ?>
    <section>
      <?php while(have_posts()): the_post(); ?>
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>
</main>