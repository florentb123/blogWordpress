<?php get_header(); ?>
  <main class="wrap">
    <section class="content-area content-thin">
      <div class="container-fluid divGallery">
        <div class="row overflow-hidden">
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
      <?php get_template_part('content','') ?>
    </section>
    <section>
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-0">
              <div id="map">
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 px-0">
              <div class="bg-emplacement"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/map.js"></script>
<?php get_footer(); ?>