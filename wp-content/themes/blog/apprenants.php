<?php
/*
 * Template Name: apprenants
 */

get_header(); ?>

<main class="wrap">

  <?php
  $args = array(
    'post_type' => 'apprenants',
    'posts_per_page' => 50,
    'order' => 'ASC',
  );

  $my_query = new WP_Query($args);
  ?>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      
  <?php while ($my_query->have_posts()) : $my_query->the_post(); 
    
    $git = get_post_meta(get_the_ID(), '_apprenants_git', true);
    $linkedin = get_post_meta(get_the_ID(), '_apprenants_linkedin', true);
    ?>
      <div class="col-12 col-sm-6 col-md-3 col-lg-3 my-4 text-center">
        <div class=""><?php the_post_thumbnail('post-thumbnail',array('class'=>'bg-apprenant')); ?></div>
        <?php the_title("<h5 >", "</h5>"); ?>
        <div class="d-flex justify-content-center">
          <a class="lien p-2" href="<?php echo $git ; ?>"><div class="iconGit"></div></a>
          <a class="lien p-2 "href="<?php echo $linkedin ; ?>"><div class="iconLinkedin"></div></a>
        </div>
      </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
  
</main>
<?php get_footer(); ?>