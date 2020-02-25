<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
  <div class="container-fluid">
      <div class="row">
        <?php if (is_active_sidebar('gallery1')) : ?>
          <div id="gallery1" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0" >
			    <?php dynamic_sidebar('gallery1'); ?>
		      </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('gallery2')) : ?>
          <div id="gallery2" class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
			    <?php dynamic_sidebar('gallery2'); ?>
		      
        <?php endif; ?>
        
        <?php if (is_active_sidebar('gallery3')) : ?>
			    <?php dynamic_sidebar('gallery3'); ?>
		      </div>
        <?php endif; ?>
        
        <?php if (is_active_sidebar('gallery4')) : ?>
          <div id="gallery4" class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
			    <?php dynamic_sidebar('gallery4'); ?>
		      
        <?php endif; ?>
        
        <?php if (is_active_sidebar('gallery5')) : ?>
			    <?php dynamic_sidebar('gallery5'); ?>
		      </div>
	      <?php endif; ?>
        
          
        
    </div>
  </div>
  
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="article-loop">
          <header>

            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            By: <?php the_author(); ?>
          </header>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile;
    else : ?>
      <article>
        <p >Sorry, no posts were found!</p>
      </article>
    <?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>