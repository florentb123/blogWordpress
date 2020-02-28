<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
        
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        </header>
        <a href="<?php echo esc_url( get_page_link( 'apprenants' ) ); ?>">
    <?php esc_html_e( 'apprenants', 'textdomain' ); ?>
</a>
        <?php the_content(); the_post_thumbnail();?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Désolé il n'y a aucun apprenant !</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>