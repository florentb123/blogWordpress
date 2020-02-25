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
      <article class="article-loop">
        <div class="container-fluid bg-grey pb-5">
          <div class="container">
            <div class="row pt-5  ">
              <div class="col-12 p-0">
                <h2>Nos projets</h2>
              </div>
            </div>
            <div class="row p-0 pt-5 justify-content-between">

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                  <div class="bg-white articles-mw p-0 Regular shadow mb-5">
                    <div>
                      <a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail('',array('class' => 'img-fluid')) ?></a>
                    </div>
                    <header>
                      <h2 class="w-75 m-auto py-3"><a  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    </header>
                    <?php echo '<p class="w-75 m-auto pb-5 textProjet">'.get_the_excerpt().'</p>' ?>
                  </div>
                
              <?php endwhile; ?>

            </div>
          </div>
        </div>
      </article>
      <?php else : ?>
      
        <article>
          <p >Sorry, no posts were found!</p>
        </article>
      <?php endif; ?>
    </section>
  </main>
<?php get_footer(); ?>