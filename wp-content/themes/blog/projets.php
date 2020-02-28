<?php
/*
 * Template Name: projets
 */

 get_header(); ?>

<main class="wrap">
  <article class="article-loop">
    <div class="container-fluid bg-grey">
      <div class="container">
        <div class="row pt-5  ">
          <div class="col-12 p-0 ">
            <h2 class="text-center title-playfaire">Nos projets</h2>
          </div>
        </div>
        <div class="row p-0 pt-5 justify-content-between">
        <?php
          $args = array(
            'post_type' => 'projets',
          );
  
          $featured_query = new WP_Query($args);
  
          // limit 3 derniers projets
          $featured_query->query($featured_query->query_vars);
          // var_dump($featured_query);
  
          if ($featured_query->have_posts()) :while ($featured_query->have_posts()) : $featured_query->the_post(); 
          $url =  get_post_meta(get_the_ID(), '_url_projet', true);
          
          
          $projet =  get_post_meta(get_the_ID(), '_projets_description', true); ?>
            
              <div class="bg-white articles-mw p-0 Regular shadow mb-5">
                <header>
                  <a href="<?php echo $url; ?>" target="_blank"><div class="bg-articles " style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)"></div></a>
                  <h2 class="w-75 m-auto py-3 text-center title-playfaire ">
                    <a  href="<?php echo $url; ?>" target="_blank" class="text-body" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                  </h2>
                </header>
              </div>
            
          <?php  endwhile; ?>
  
        </div>
      </div>
    </div>
  </article>
  <?php else : ?>
  
    <article>
      <p >Désolé, il n'y a aucun projet !</p>
    </article>
  <?php endif; ?>

</main>
<?php get_footer(); ?>