<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// css upload
if ( ! function_exists( 'neve_child_load_css' ) ):
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.scss', array( 'neve-style' ), NEVE_VERSION );
		wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array());

		wp_enqueue_style( 'owlcarousel-style', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.4');
        wp_enqueue_style( 'owlcarousel-theme', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.4');
        wp_enqueue_style( 'owlcarousel-transitions', get_stylesheet_directory_uri() . '/css/owl.theme.default.css', array(), '2.3.4');

		
		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		
	}
	
endif;

add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );



function register_custom_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1' );
	
	wp_enqueue_script( 'bootstrap', get_theme_file_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );

	wp_enqueue_script( 'owlcarousel', get_theme_file_uri() . '/js/owl.carousel.js', array('jquery'), '2.3.4');
    
    wp_enqueue_script( 'main-js', get_theme_file_uri('/js/custom.js'), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts', 'register_custom_jquery');



//=========================add related posts in single post =========================/

function ci_get_related_posts( $post_id, $related_count, $args = array() ) {
	$terms = get_the_terms( $post_id, 'category' );
	
	if ( empty( $terms ) ) $terms = array();
	
	$term_list = wp_list_pluck( $terms, 'slug' );
	
	$related_args = array(
		'post_type' => 'post',
		'posts_per_page' => $related_count,
		'post_status' => 'publish',
		'post__not_in' => array( $post_id ),
		'orderby' => 'rand',
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => $term_list
			)
		)
	);

	return new WP_Query( $related_args );
}




//========================= Theme setup function ============================/

if ( ! function_exists( 'urban_joy_setup' ) ) :

	function urban_joy_setup() {

		add_theme_support( 'title-tag' );
	
		
	}


    $textdomain = 'neve';
    load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

	//translations
	// load_theme_textdomain( 'neve', get_template_directory() . '/languages' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 672, 372, true );
	// add_image_size( 'blog_thumb', 279, 245, true );

    // add_image_size( 'single-feature', 1024, 768, true );

    //** *Enable upload for webp image files.*/
    function webp_upload_mimes($existing_mimes) {
        $existing_mimes['webp'] = 'image/webp';
        return $existing_mimes;
    }
    
    add_filter('mime_types', 'webp_upload_mimes');

	//suport svg
	function my_custom_mime_types( $mimes ) {
		
		// New allowed mime types.
		$mimes['svg'] = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';
		$mimes['doc'] = 'application/msword';
		
		// Optional. Remove a mime type.
		unset( $mimes['exe'] );
		
		return $mimes;
	}


	add_filter( 'upload_mimes', 'my_custom_mime_types' );


    function register_my_menus() {
        register_nav_menus(
          array(
            'sidebar-menu' => __( 'Sidebar menu' ),
            'mobile-menu' => __( 'Mobile menu' )
          )
        );
      }
    add_action( 'init', 'register_my_menus' );




	//remove reade more from excerpt
	function new_excerpt_more($more) {
		global $post;
		remove_filter('excerpt_more', 'new_excerpt_more'); 
		return '';

	}

	add_filter('excerpt_more','new_excerpt_more',11);


	// function add_content_after($content) {

	// 	if( is_singular('post') && is_main_query() ) {
	// 	       // $custom_div = '<div class="tags-wrapper">tags</div>';
	// 			$tags = the_tags('<div class="tags-meta"><span class="tags-content">Tags</span>','  ','</div><br />'); 
				
	// 			$content .= $content . $tags;
	// 		}
	// 	return $content;
	// }

	// add_filter( 'the_content', 'add_content_after' );
  
 add_action( 'after_setup_theme', 'urban_joy_setup' );
endif;


//=========================   remove comments from all web site ============================/

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});



function count_post_visits() {
	if( is_single() ) {
	   global $post;
	   $views = get_post_meta( $post->ID, 'my_post_viewed', true );
	   if( $views == '' ) {
		  update_post_meta( $post->ID, 'my_post_viewed', '1' );   
	   } else {
		  $views_no = intval( $views );
		  update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
	   }
	}
 }
 add_action( 'wp_head', 'count_post_visits' );



 //Create Custom Post type Videos
 //Register CPT Events
 function urbanjoy_post_types() {
 
	 //Program Post Type
	 
	 $labels = array(
   
		 'name'                  => __('Videos' , 'post type general name', 'urbanjoytheme'),
		 'singular_name'         => __('Video' , 'post type singular name', 'urbanjoytheme'),
		 'add_new'               => __('Add new Video', 'member', 'urbanjoytheme'),
		 'add_new_item'          => __('Add new Video', 'urbanjoytheme'),
		 'edit_item'             => __('Edit', 'urbanjoytheme'),
		 'new_item'              => __('New Video', 'urbanjoytheme'),
		 'view_item'             => __('View', 'urbanjoytheme'),
		 'search_items'          => __('Search Video', 'urbanjoytheme'),
		 'not_found'             => __('No Videos found!', 'urbanjoytheme'),
		 'not_found_in_trash'    => __('No Videos in the trash!', 'urbanjoytheme'),
		 'parent_item_color'     => ''
	 );  
   
	 $args = array (
		 'labels' => $labels,
		 'supports' => array( 'title', 'author', 'thumbnail', 'editor', 'excerpt', 'comments', 'custom-fields'),
   
		 'public' => true,
		 'has_archive' => true,//has archive page
		 'menu_icon'   => 'dashicons-video-alt3',
		 'rewrite' => array ( 'slug' => 'urbanjoy-videos'),//in archive url etc university.local/universite-events
		 'show_in_rest' => true,
		 'taxonomies' => array('post_tag','video-categories'),

		 //'taxonomies'          => array( 'category', 'post_tag' ),
	 );
   
	 register_post_type( 'videos' , $args );//take the name in single-programs.php
   
 }
   
   add_action( 'init', 'urbanjoy_post_types');



   // Let us create Taxonomy for Custom Post Type
add_action( 'init', 'urban_joy_videos_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function urban_joy_videos_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Categoru Name' ),
    'menu_name' => __( 'Categories' ),
  ); 	
 
  register_taxonomy('categories',array('videos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'video-categories' ),
  ));
}



// // Registering Custom Post Type books
// add_action( 'init', 'register_themepost', 20 );
// function register_themepost() {
//     $labels = array(
//         'name' => _x( 'Books', 'my_custom_post','custom' ),
//         'singular_name' => _x( 'Theme', 'my_custom_post', 'custom' ),
//         'add_new' => _x( 'Add New Book', 'my_custom_post', 'custom' ),
//         'add_new_item' => _x( 'Add New ThemePost', 'my_custom_post', 'custom' ),
//         'edit_item' => _x( 'Edit ThemePost', 'my_custom_post', 'custom' ),
//         'new_item' => _x( 'New ThemePost', 'my_custom_post', 'custom' ),
//         'view_item' => _x( 'View ThemePost', 'my_custom_post', 'custom' ),
//         'search_items' => _x( 'Search ThemePosts', 'my_custom_post', 'custom' ),
//         'not_found' => _x( 'No ThemePosts found', 'my_custom_post', 'custom' ),
//         'not_found_in_trash' => _x( 'No ThemePosts found in Trash', 'my_custom_post', 'custom' ),
//         'parent_item_colon' => _x( 'Parent ThemePost:', 'my_custom_post', 'custom' ),
//         'menu_name' => _x( 'Books', 'my_custom_post', 'custom' ),
//     );

//     $args = array(
//         'labels' => $labels,
//         'hierarchical' => false,
//         'description' => 'Custom Theme Posts',
//         'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
//         'taxonomies' => array( 'post_tag','books_categories'),
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-book',
//         'show_in_nav_menus' => true,
//         'publicly_queryable' => true,
//         'exclude_from_search' => false,
//         'query_var' => true,
//         'can_export' => true,
//         'rewrite' => array( 'slug' => 'books-categories'),
//         'public' => true,
// 		'has_archive' => true,//has archive page
//         'capability_type' => 'post'
//     );
//     register_post_type( 'books', $args ); // max 20 character cannot contain capital letters and spaces
// }


// function books_taxonomy() {
//     register_taxonomy(
//         'books_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
//         'books',             // post type name
//         array(
//             'hierarchical' => true,
//             'label' => 'Books Categories', // display name
//             'query_var' => true,
// 			'show_ui' => true,
//             'show_admin_column' => true,
//             'rewrite' => array(
//                 'slug' => 'books',    // This controls the base slug that will display before each term
//                 'with_front' => false  // Don't display the category base before
//             )
//         )
//     );
// }
// add_action( 'init', 'books_taxonomy');


// Registering Custom Post Type Urban legends
add_action( 'init', 'register_legends', 20 );
function register_legends() {
    $labels = array(
        'name' => _x( 'Urban Legengs', 'my_custom_post','custom' ),
        'singular_name' => _x( 'Theme', 'my_custom_post', 'custom' ),
        'add_new' => _x( 'Add New Urban Legend', 'my_custom_post', 'custom' ),
        'add_new_item' => _x( 'Add New Legends', 'my_custom_post', 'custom' ),
        'edit_item' => _x( 'Edit Legends', 'my_custom_post', 'custom' ),
        'new_item' => _x( 'New Legends', 'my_custom_post', 'custom' ),
        'view_item' => _x( 'View Legends', 'my_custom_post', 'custom' ),
        'search_items' => _x( 'Search Legends', 'my_custom_post', 'custom' ),
        'not_found' => _x( 'No Legends found', 'my_custom_post', 'custom' ),
        'not_found_in_trash' => _x( 'No Legends found in Trash', 'my_custom_post', 'custom' ),
        'parent_item_colon' => _x( 'Parent Legends:', 'my_custom_post', 'custom' ),
        'menu_name' => _x( 'Urban Legends', 'my_custom_post', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom Theme Posts',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
        'taxonomies' => array( 'post_tag','urban_legends'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'urban-legends'),
        'public' => true,
		'has_archive' => true,//has archive page
        'capability_type' => 'post'
    );
    register_post_type( 'legends', $args ); // max 20 character cannot contain capital letters and spaces
}


function legends_taxonomy() {
    register_taxonomy(
        'urban_legends',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'legends',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Urban Legends Categories', // display name
            'query_var' => true,
			'show_ui' => true,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'legends',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'legends_taxonomy');


// Registering Custom Post Type Urban legends
add_action( 'init', 'photo_of_day', 20 );
function photo_of_day() {
    $labels = array(
        'name' => _x( 'photo of day', 'my_custom_post','custom' ),
        'singular_name' => _x( 'Theme', 'my_custom_post', 'custom' ),
        'add_new' => _x( 'Add New Photo', 'my_custom_post', 'custom' ),
        'add_new_item' => _x( 'Add New Photos', 'my_custom_post', 'custom' ),
        'edit_item' => _x( 'Edit Photos', 'my_custom_post', 'custom' ),
        'new_item' => _x( 'New Photos', 'my_custom_post', 'custom' ),
        'view_item' => _x( 'View Photos', 'my_custom_post', 'custom' ),
        'search_items' => _x( 'Search Photos', 'my_custom_post', 'custom' ),
        'not_found' => _x( 'No Photos found', 'my_custom_post', 'custom' ),
        'not_found_in_trash' => _x( 'No Photos found in Trash', 'my_custom_post', 'custom' ),
        'parent_item_colon' => _x( 'Parent Photos:', 'my_custom_post', 'custom' ),
        'menu_name' => _x( 'Urban Photos', 'my_custom_post', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom Theme Posts',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
        'taxonomies' => array( 'post_tag','photos_of_day'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'photos-of-day'),
        'public' => true,
		'has_archive' => true,//has archive page
        'capability_type' => 'post'
    );
    register_post_type( 'photos', $args ); // max 20 character cannot contain capital letters and spaces
}


function photos_taxonomy() {
    register_taxonomy(
        'photos_of_day',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'legends',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Urban Photos Categories', // display name
            'query_var' => true,
			'show_ui' => true,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'photos',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}


add_action( 'init', 'photos_taxonomy');


get_template_part('menu-parts/sidebar-menu');  

get_template_part('menu-parts/mobile-menu');


