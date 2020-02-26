<?php get_header(); ?>
<main class="wrap">
  <div class="content-area content-thin">

    <section>
      <h2>Derniers articles</h2>

      <?php
      $recentPosts = new WP_Query();
      $recentPosts->query('showposts=3');
      ?>
      <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

        <!-- Ce qui suit teste si l'Article en cours est dans la Catégorie 3. -->
        <!-- Si c'est le cas, le bloc div reçoit la classe CSS "post-cat-three". -->
        <!-- Sinon, le bloc div reçoit la classe CSS "post". -->

        <div class="entry">
          <!-- Affiche le Titre en tant que lien vers le Permalien de l'Article. -->
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>



          <!-- Affiche le corps (Content) de l'Article dans un bloc div. -->


          <?php
          the_post_thumbnail();
          /*
   Affiche les 20 premiers caracters de l'article (nbre de caractere defini dans functions.php)
   **/
          the_excerpt();

          /**
           * affiche l'article en entier
           */
          //the_content(); 
          ?>
        </div>

        <!-- Affiche une liste des Catégories des Articles séparées par des virgules. -->
        <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
  </div> <!-- Fin du premier bloc div -->

  <!-- Fin de La Boucle (mais notez le "else:" - voir la suite). -->




<?php endwhile; ?>
</section>
<section>
  <h3>Projets</h3>

  <?php
  $args = array(
    'post_type' => 'projets',

  );

  $featured_query = new WP_Query($args);

  // limit 3 derniers projets
  $featured_query->set('posts_per_page', 3);
  $featured_query->query($featured_query->query_vars);
  // var_dump($featured_query);
  while ($featured_query->have_posts()) : $featured_query->the_post();

    $url =  get_post_meta(get_the_ID(), '_url_projet', true);
    $projet =  get_post_meta(get_the_ID(), '_projets_description', true);


    the_title();
    echo '<br>';
    the_post_thumbnail();
    echo '<br>';
    echo $projet;
    echo '<br>';
    echo $url;
    echo '<br>';
    echo '<br>';
  endwhile;

  ?>
</section>

</div><?php get_sidebar(); ?>

</main>
<?php get_footer(); ?>