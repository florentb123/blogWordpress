<?php get_header(); ?>
  <main class="wrap">
    <section class="content-area content-thin">
      <div class="container-fluid divGallery">
        <div class="row">
          <?php if (is_active_sidebar('gallery1')) : ?>
            <div id="gallery1" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0" >
            <?php dynamic_sidebar('gallery1'); 
           
            ?>

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
        <div class="container-fluid bg-grey">
          <div class="container">
            <div class="row pt-5  ">
              <div class="col-12 p-0">
                <h2>Nos projets</h2>
              </div>
            </div>
            <div class="row p-0 pt-5 justify-content-between">

            <?php
              $args = array(
                'post_type' => 'projets',
              );

              $featured_query = new WP_Query($args);

              // limit 3 derniers projets
              $featured_query->set('posts_per_page', 3);
              $featured_query->query($featured_query->query_vars);
              // var_dump($featured_query);

              if ($featured_query->have_posts()) :while ($featured_query->have_posts()) : $featured_query->the_post(); 
              $url =  get_post_meta(get_the_ID(), '_url_projet', true);
              $projet =  get_post_meta(get_the_ID(), '_projets_description', true); ?>
                
                  <div class="bg-white articles-mw p-0 Regular shadow mb-5">
                    <header>
                      <a href="<?php the_permalink(); ?>"><div class="bg-articles" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)"></div></a>
                      <h2 class="w-75 m-auto py-3">
                        <a  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                      </h2>
                    
                    <?php echo '<p class="w-75 m-auto pb-5 textProjet">'.get_the_excerpt().'</p>' ?>
                    </header>
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

      <article class="article-loop">
        <div class="container-fluid bg-grey">
          <div class="container">
            <div class="row  ">
              <div class="col-12 p-0">
                <h2>Articles</h2>
              </div>
            </div>
            <div class="row p-0 pt-5 justify-content-between">
            <?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=3');
             if ($recentPosts->have_posts()) :while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                  <div class="bg-white articles-mw p-0 Regular shadow mb-5">
                    <header>
                      <a href="<?php the_permalink(); ?>"><div class="bg-articles" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)"></div></a>
                      <h2 class="w-75 m-auto py-3">
                        <a  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                      </h2>
                    
                    <?php echo '<p class="w-75 m-auto pb-5 textProjet">'.get_the_excerpt().'</p>' ?>
                    </header>
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