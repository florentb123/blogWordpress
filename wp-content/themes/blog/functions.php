<?php
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
   // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
   
   // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
   
     //
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


  // Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );


// Register a new navigation menu
function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );


  add_theme_support( 'post-thumbnails' );
function wpm_custom_post_type() {
    
	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Apprenants ', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Apprenant ', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Apprenants '),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les apprenants'),
		'view_item'           => __( 'Voir les apprenants'),
		'add_new_item'        => __( 'Ajouter un nouvel apprenant'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer'),
		'update_item'         => __( 'Modifier'),
		'search_items'        => __( 'Rechercher'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'apprenants'),
		'description'         => __( 'Tous sur apprenants'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt',  'thumbnail',  'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'apprenants'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'apprenants', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );


function apprenants_add_meta_boxes( $post ){
    add_meta_box( 'apprenants_meta_box', __( 'git', 'apprenants_example_plugin' ), 'apprenants_build_meta_box', 'apprenants', 'normal', 'low' );
}
add_action( 'add_meta_boxes_apprenants', 'apprenants_add_meta_boxes' );


function apprenants_build_meta_box( $post ){
	// make sure the form request comes from WordPress
	wp_nonce_field( basename( __FILE__ ), 'apprenants_meta_box_nonce' );

	// retrieve the _apprenants_git current value
	$current_git = get_post_meta( $post->ID, '_apprenants_git', true );

	// retrieve the _apprenants_linkedin current value
	$current_linkedin = get_post_meta( $post->ID, '_apprenants_linkedin', true );

	
	?>
	<div class='inside'>

		<h3><?php _e( 'git', 'apprenants_example_plugin' ); ?></h3>
		<p>
			<input type="text" name="git" value="<?php echo $current_git; ?>" /> 
		</p>

		<h3><?php _e( 'linkedin', 'apprenants_example_plugin' ); ?></h3>
		<p>
			<input type="text" name="linkedin" value="<?php echo $current_linkedin; ?>" /> 
		</p>

		
	</div>
	<?php
}


function apprenants_save_meta_box_data( $post_id ){
	// verify taxonomies meta box nonce
	if ( !isset( $_POST['apprenants_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['apprenants_meta_box_nonce'], basename( __FILE__ ) ) ){
		return;
	}

	// return if autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
		return;
	}

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}

	// store custom fields values
	// git string
	if ( isset( $_REQUEST['git'] ) ) {
		update_post_meta( $post_id, '_apprenants_git', sanitize_text_field( $_POST['git'] ) );
	}
	
	// store custom fields values
	// linkedin string
	if ( isset( $_REQUEST['linkedin'] ) ) {
		update_post_meta( $post_id, '_apprenants_linkedin', sanitize_text_field( $_POST['linkedin'] ) );
	}
	
	
}
add_action( 'save_post_apprenants', 'apprenants_save_meta_box_data' );