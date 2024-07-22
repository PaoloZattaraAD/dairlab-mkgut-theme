<?php 

add_action('acf/init', 'mkgut_setup_timeline_opt');
function mkgut_setup_timeline_opt() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('About Timeline Impostazioni'),
            'menu_title'    => __('About Timeline Impostazioni'),
            'menu_slug'     => 'about-timeline-impostazioni',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

if ( ! function_exists( 'mkgut_setup' ) ) :

	function mkgut_setup() {

		load_theme_textdomain( 'mkgut', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
        add_theme_support( 'align-wide' );
		add_theme_support( 'post-thumbnails' );
        //for posts carousel
        add_image_size( 'dairlab-thumb', 1000, 1000, true );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'White', 'mkgut' ),
                'menu-2' => __( 'Black', 'mkgut' ),
				'footer' => __( 'Footer Menu', 'mkgut' ),
				'social' => __( 'Social Links Menu', 'mkgut' ),
				'landing' => __( 'Landing Footer Links Menu', 'mkgut' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'mkgut' ),
					'shortName' => __( 'S', 'mkgut' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'mkgut' ),
					'shortName' => __( 'M', 'mkgut' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'mkgut' ),
					'shortName' => __( 'L', 'mkgut' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'mkgut' ),
					'shortName' => __( 'XL', 'mkgut' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Dark Gray', 'mkgut' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'mkgut' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'mkgut' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
                array(
					'name'  => __( 'D-color', 'mkgut' ),
					'slug'  => 'dcolor',
					'color' => '#009fe3',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'mkgut_setup' );



function mk_gut_widgets_init() {

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer', 'dairlabtm' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'dairlabtm' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 2', 'dairlabtm' ),
            'id'            => 'sidebar-2',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'dairlabtm' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'blog', 'dairlabtm' ),
            'id'            => 'blog',
            'description'   => esc_html__( 'Add widgets here to appear in your blog.', 'dairlabtm' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'mk_gut_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function mkgut_scripts() {
	wp_enqueue_style( 'mkgut-style', get_stylesheet_uri(), array(), date('Y.m.d h:m:s') );
    wp_enqueue_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', array(), '1.8.1' );
    wp_enqueue_script( 'splidejs', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array('jquery'), '1.8.1', true );
}
add_action( 'wp_enqueue_scripts', 'mkgut_scripts' );


 // clean wordpress
require get_template_directory() . '/inc/clean.php';

  // custom cover wordpress
require get_template_directory() . '/blocks/cover.php';


//shortcode for template

function get_timeline() {
	ob_start();
	get_template_part( 'template-parts/content/timeline' );
	return ob_get_clean();
  }
add_shortcode('gettimeline', 'get_timeline');


function get_timeline_en() {
	ob_start();
	get_template_part( 'template-parts/content/timeline-en' );
	return ob_get_clean();
  }
add_shortcode('gettimelineen', 'get_timeline_en');


function get_latest_post() {
	ob_start();
	get_template_part( 'template-parts/loop/latestposts-carousel' );
	return ob_get_clean();
  }
add_shortcode('latestpost', 'get_latest_post');


  /**
 * Gutenberg block slider
 */
function slide_admin_enqueue() {

    $screen = get_current_screen();

    // load on the NEW and EDIT screens of all post types
    if ( 'post' === $screen->base || 'page' === $screen->base  ) {
        wp_enqueue_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', array(), '1.8.1' );
        wp_enqueue_script( 'splidejs', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), '1.8.1', true );
    }

}
add_action('admin_enqueue_scripts', 'slide_admin_enqueue');

require get_template_directory() . '/blocks/slider.php';
require get_template_directory() . '/blocks/mainslider.php';
require get_template_directory() . '/blocks/previewarticolo.php';


function wpdocs_excerpt_more( $more ) {
	if(ICL_LANGUAGE_CODE == 'it'){ 
            $readm = "...scopri di più";
            }else{ 
			$readm = "...read more";     
            }
    return '  <a href="'.get_the_permalink().'">'.$readm.'</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpdocs_custom_excerpt_length( $length ) {
    return 26;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

require get_template_directory() . '/inc/blocks.php';
add_filter('wpcf7_autop_or_not', '__return_false');