<?php
/*
 * Template Name: apprenants
 */

 get_header(); ?>

<main class="wrap">
        

  <?php while ( have_posts() ) : the_post();
    if( has_post_thumbnail() ):
        echo get_the_post_thumbnail();
    endif;  
endwhile; ;
  $args = array(
    'post_type' => 'apprenants',
    'posts_per_page' => 20,
    'order' => 'ASC',
  );

  $my_query = new WP_Query($args);
  ?>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      
  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php
    $git = get_post_meta(get_the_ID(), '_apprenants_git', true);
    $linkedin = get_post_meta(get_the_ID(), '_apprenants_linkedin', true);
    ?>
      <div class="col-3 my-4 text-center">
        <div class=""><?php the_post_thumbnail('post-thumbnail',array('class'=>'bg-apprenant')); ?></div>
        <?php the_title("<h5 >", "</h5>"); ?>
        <div class="d-flex justify-content-center">
          <a class="lien" href="<?php echo $git ; ?>"><div class="iconGit"></div></a>
          <a class="lien "href="<?php echo $linkedin ; ?>"><div class="iconLinkedin"></div></a>
        </div>
        
      </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div>
</main>
<?php get_footer(); ?>