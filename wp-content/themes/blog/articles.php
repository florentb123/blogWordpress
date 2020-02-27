<?php
/*
 * Template Name: articles
 */

 get_header(); ?>

<main class="wrap">
  <article class="article-loop">
    <div class="container-fluid bg-grey">
      <div class="container">
        <div class="row pt-5  ">
          <div class="col-12 p-0 ">
            <h2 class="text-center title-playfaire">Articles</h2>
          </div>
        </div>
        <div class="row p-0 pt-5 justify-content-between">
        <?php
        
         $the_query = new WP_Query($args);
         $the_query->query('showposts=-1');
        

         if ($the_query->have_posts()) :while ($the_query->have_posts()) : $the_query->the_post();  ?>
            
                <div class="bg-white articles-mw p-0 Regular shadow mb-5">
                    <header>
                      <a href="<?php the_permalink(); ?>"><div class="bg-articles" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)"></div></a>
                      <h2 class="w-75 m-auto py-4 text-center title-playfaire">
                        <a  href="<?php the_permalink(); ?>" class="text-body" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                      </h2>
                    
                    <?php echo '<p class="w-75 m-auto pb-5 textProjet text-playfaire">'.get_the_excerpt().'</p>' ?>
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

</main>
<?php get_footer(); ?>