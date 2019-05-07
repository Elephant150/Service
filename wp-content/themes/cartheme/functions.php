<?php
show_admin_bar(false);
// support theme
if ( ! function_exists( 'cartheme_setup' ) ) :
  function cartheme_setup() {
    load_theme_textdomain( 'cartheme' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 9999 );
    register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'cartheme' ),
    ) );
    add_theme_support( 'post-formats', array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
      'gallery',
      'status',
      'audio',
      'chat',
    ) );
  }
  endif; 
  add_action( 'after_setup_theme', 'cartheme_setup' );
// widgets top
function cartheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Phone number in the header of the site', 'cartheme' ),
			'id'            => 'header-widget',
			'description'   => __( '', 'cartheme' ),
			'before_widget' => '<div id="%1$s" class="header-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="header-widget-title">',
			'after_title'   => '</h2>',
		)
  );
  register_sidebar(
		array(
			'name'          => __( 'Copyright &copy;', 'cartheme' ),
			'id'            => 'footer-widget',
			'description'   => __( '', 'cartheme' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="footer-widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cartheme_widgets_init' );
// widgets bottom
// inclute style scripts
  function cartheme_scripts() {

    wp_enqueue_style( 'cartheme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'cartheme-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array() );
    wp_enqueue_style( 'cartheme-main', get_template_directory_uri() . '/css/main.css', array() );
    wp_enqueue_style( 'cartheme-media', get_template_directory_uri() . '/css/media.css', array() );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'cartheme-bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'cartheme-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
    wp_script_add_data( 'cartheme-html5', 'conditional', 'lt IE 9' );
    }
  add_action( 'wp_enqueue_scripts', 'cartheme_scripts' );
?>