<?php
/**
 * newcame functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newcame
 */

if ( ! function_exists( 'newcame_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function newcame_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on newcame, use a find and replace
     * to change 'newcame' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'newcame', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'newcame' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'newcame_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'newcame_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newcame_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'newcame_content_width', 640 );
}
add_action( 'after_setup_theme', 'newcame_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newcame_widgets_init() {
  register_sidebar( array(
      'name'          => esc_html__( 'Sidebar', 'newcame' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here.', 'newcame' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'newcame_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function newcame_scripts() {
  wp_enqueue_style( 'newcame-style', get_stylesheet_uri() );
  wp_enqueue_style( 'newcame-font-family', 'http://fonts.googleapis.com/css?family=Righteous&amp;subset=latin-ext' );
  wp_enqueue_style( 'newcame-font-sizes', 'http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' );
  wp_enqueue_style( 'newcame-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css' );
  wp_enqueue_style( 'newcame-font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css' );
  wp_enqueue_style( 'newcame-flexslider', get_template_directory_uri().'/assets/css/flexslider.css' );
  wp_enqueue_style( 'newcame-style1', get_template_directory_uri().'/assets/css/style.css' );

  wp_enqueue_script( 'newcame-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
  wp_enqueue_script( 'newcame-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
  wp_enqueue_script( 'newcame-jquery-1.11.1.min', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array(), '', true );
  wp_enqueue_script( 'newcame-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '', true );
  wp_enqueue_script( 'newcame-SmoothScroll.min', get_template_directory_uri() . '/assets/js/SmoothScroll.min.js', array(), '', true );
  wp_enqueue_script( 'newcame-move-top', get_template_directory_uri() . '/assets/js/move-top.js', array(), '', true );
  wp_enqueue_script( 'newcame-easing', get_template_directory_uri() . '/assets/js/easing.js', array(), '', true );
  wp_enqueue_script( 'newcame-jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array(), '', true );
  wp_enqueue_script( 'newcame-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'newcame_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}

// function to get gallery posts using ajax call to it
function gallery_posts() {
  $gallery_category = $_POST['gallery_category'];
  if($gallery_category != "all"){
    $tax_query = array(
      array(
          'taxonomy' => 'gallery_category',
          'field'    => 'slug',
          'terms'    => $gallery_category,
      ),
    );
  }else{
    $tax_query = null;
  }
  $args = array(
  'post_type' => 'portfolio',
  'post_status' => 'publish',
  'numberposts' => -1,
  'tax_query' => $tax_query
);
$query = new WP_Query( $args );
$query_posts = $query->posts;
$html = "";
foreach($query_posts as $query_post){
  $post_thumbnail_url = get_the_post_thumbnail_url($query_post->ID);
  $html .= "<div class='col-md-4 gallery-grid'>
              <div class='grid'>
                <figure class='effect-roxy'>
                  <a class='example-image-link' href='$query_post->guid' data-lightbox='example-set'>
                    <img src='$post_thumbnail_url' alt='' />
                    <figcaption>
                      <h3>$query_post->post_title</h3>
                      <p>$query_post->post_content</p>
                    </figcaption>
                  </a>
                </figure>
              </div>
            </div>";
  }
  print_r($html);
  exit();
}
add_action('wp_ajax_gallery_posts', 'gallery_posts');
add_action('wp_ajax_nopriv_gallery_posts', 'gallery_posts');
