<?php get_header(); ?>
<main class="wrap">

  <?php
  $args = array(
    'post_type' => 'apprenants',
    'posts_per_page' => 1,
    'order' => 'DESC',
  );

  $my_query = new WP_Query($args);
  ?>

  <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php
    $git = get_post_meta(get_the_ID(), '_apprenants_git', true);
    $linkedin = get_post_meta(get_the_ID(), '_apprenants_linkedin', true);

    the_title("<h1>", "</h1>");
    echo "<p> git :" . $git . "</p>";
    echo "<p> linkedin :" . $linkedin . "</p>";

    ?>
  <?php endwhile; // End of the loop. 
  ?>
  <?php wp_reset_postdata(); ?>
  </div>

</main>
<?php get_footer(); ?>