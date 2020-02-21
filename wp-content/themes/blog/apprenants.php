
<?php
/*
 * Template Name: apprenants
 */



 get_header(); ?>
<main class="wrap">

  <?php
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
      <div class="col-3">
        <div class="bg-apprenant"><?php the_post_thumbnail('post-thumbnail',''); ?></div>
        <?php the_title("<h5>", "</h5>"); ?>
        <div class="d-flex">
          <a href="<?php echo $git ; ?>"><div class="iconGit"></div></a>
          <a href="<?php echo $linkedin ; ?>"><div class="iconLinkedin"></div></a>
        </div>
        
      </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div>

</main>
<?php get_footer(); ?>