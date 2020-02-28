<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-full-width">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="container-fluid w-100">
      <div class="row ">
            <div class="col-12  p-0   ">
            <?php the_post_thumbnail('full',array('class'=>" mt-0 mw-100  p-0 img-fluid")); ?>
            </div>

        <header class="container ">
          <div class="row ">
            <div class="col-12">
           
            </div>
            <div class="col-10 col-md-12 offset-1  text-left mt-5 ml-5 ">

          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          By: <?php the_author(); ?>

      
       </div>
       </header>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found!</p>
      </article>
<?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>