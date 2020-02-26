<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
   <?php wp_head(); ?>
   <link rel="shortcut icon" href="wp-content/themes/blog/favicon.ico" type="image/x-icon">
  <link rel="icon" href="wp-content/themes/blog/favicon.ico" type="image/x-icon">
 </head>
 <body <?php body_class(); ?>>
 <header>
    <nav class="navbar navbar-expand-md navbar-light bg-white" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse text-playfaire',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav w-100 justify-content-end',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center padding-logo">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logoGit.png" alt="logo de la promotion des gitBreakers" width="350px" />
            </div>
        </div>
    </div>
