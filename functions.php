<?php

// Requeridas por wordpress
if ( ! isset( $content_width ) ) $content_width = 800;

add_theme_support( 'automatic-feed-links' );
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );
if ( is_singular() ) wp_enqueue_script( "comment-reply" );

// This theme uses wp_nav_menu() in a locations.
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'simpla-jw' ),
) );

// inicio add del style.css
function load_styles() {
    wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all' );
    wp_enqueue_style('theme_style');
    
    // estilos diferentes al style.css
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
}
add_action('wp_enqueue_scripts', 'load_styles');

// Inicio add de scripts .js
function theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.js');
    wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/js/popper.min.js');
    wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/js/wow.min.js');
}
add_action( 'wp_enqueue_scripts', 'theme_js');

// sidebar widgets
function a_register_sidebars() {
    register_sidebar(array(
        'name' => __('Sidebar Principal', 'simpla-jw'),
        'id' => 'main_sidebar',
        'description' => __('Este es el sidebar principal', 'simpla-jw'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'a_register_sidebars');

// Imagen destacada para posts
add_theme_support('post-thumbnails');
add_image_size('img-post', 100, 100, true);

// Banner Personalizado
    function wp_banner ($wp_customize){
        //Section
        $wp_customize->add_section('banner', array(
          'title'   => __('Banner', 'simpla-jw'),
          'description' => sprintf(__('Modifica el banner','simpla-jw')),
          'priority'    => 130
        ));
        // Settings
        $wp_customize->add_setting('banner_image', array(
          'default'   => get_template_directory_uri('template_directory').'/img/banner.png',
          'sanitize_callback' => 'esc_attr',
          'type'      => 'theme_mod'
        ));
        // Controls 
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
          'label'   => __('Imagen del Banner', 'simpla-jw'),
          'section' => 'banner',
          'settings' => 'banner_image',
          'priority'  => 1
        )));
      }
      add_action('customize_register', 'wp_banner');

// Imagenes y Textos Frontales

  function wp_images_front ($wp_customize){
    // Section
    $wp_customize->add_section('front', array(
      'title'   => __('Diseño Frontal', 'simpla-jw'),
      'description' => sprintf(__('Opciones','simpla-jw')),
      'priority'    => 140
    ));
    // Front Page Image One
    $wp_customize->add_setting('image-unu', array(
      'default'   => get_template_directory_uri('template_directory').'/img/01.png',
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image-unu', array(
      'label'   => __('Imagen Uno', 'simpla-jw'),
      'section' => 'front',
      'settings' => 'image-unu',
      'priority'  => 1
    )));
    $wp_customize->add_setting('image-title', array(
      'default'   => __('Título Uno', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('image-title', array(
      'label'   => __('Título', 'simpla-jw'),
      'section' => 'front',
      'priority'  => 2
    ));
    $wp_customize->add_setting('image-text', array(
      'default'   => __('Diseño y desarrollo por Jw, plantilla wordpress responsive gracias a bootstrap. Animaciones gracias a animate.css y wow.js', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('image-text', array(
      'label'   => __('Texto', 'simpla-jw'),
      'section' => 'front',
      'type' => 'textarea',
      'priority'  => 3
    ));
    // Front Page Image Two
    $wp_customize->add_setting('image-du', array(
      'default'   => get_template_directory_uri('template_directory').'/img/02.png',
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image-du', array(
      'label'   => __('Imagen Dos', 'simpla-jw'),
      'section' => 'front',
      'settings' => 'image-du',
      'priority'  => 4
    )));
    $wp_customize->add_setting('image-title-du', array(
      'default'   => __('Título Dos', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('image-title-du', array(
      'label'   => __('Título', 'simpla-jw'),
      'section' => 'front',
      'priority'  => 5
    ));
    $wp_customize->add_setting('image-text-du', array(
      'default'   => __('Diseño y desarrollo por Jw, plantilla wordpress responsive gracias a bootstrap. Animaciones gracias a animate.css y wow.js', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('image-text-du', array(
      'label'   => __('Texto', 'simpla-jw'),
      'section' => 'front',
      'type' => 'textarea',
      'priority'  => 6
    ));
    // Front Page Image Three
    $wp_customize->add_setting('image-tri', array(
      'default'   => get_template_directory_uri('template_directory').'/img/03.png',
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image-tri', array(
      'label'   => __('Imagen Tres', 'simpla-jw'),
      'section' => 'front',
      'settings' => 'image-tri',
      'priority'  => 7
    )));
    $wp_customize->add_setting('image-title-tri', array(
      'default'   => __('Título Tres', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('image-title-tri', array(
      'label'   => __('Título', 'simpla-jw'),
      'section' => 'front',
      'priority'  => 8
    ));
    $wp_customize->add_setting('image-text-tri', array(
      'default'   => __('Diseño y desarrollo por Jw, plantilla wordpress responsive gracias a bootstrap. Animaciones gracias a animate.css y wow.js', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('image-text-tri', array(
      'label'   => __('Texto', 'simpla-jw'),
      'section' => 'front',
      'type' => 'textarea',
      'priority'  => 9
    ));
    // Front Page Image Three
    $wp_customize->add_setting('image-kvar', array(
      'default'   => get_template_directory_uri('template_directory').'/img/04.png',
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image-kvar', array(
      'label'   => __('Imagen Cuatro', 'simpla-jw'),
      'section' => 'front',
      'settings' => 'image-kvar',
      'priority'  => 10
    )));
    $wp_customize->add_setting('image-title-kvar', array(
      'default'   => __('Título Cuatro', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('image-title-kvar', array(
      'label'   => __('Título', 'simpla-jw'),
      'section' => 'front',
      'priority'  => 11
    ));
    $wp_customize->add_setting('image-text-kvar', array(
      'default'   => __('Diseño y desarrollo por Jw, plantilla wordpress responsive gracias a bootstrap. Animaciones gracias a animate.css y wow.js', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('image-text-kvar', array(
      'label'   => __('Texto', 'simpla-jw'),
      'section' => 'front',
      'type' => 'textarea',
      'priority'  => 12
    ));
  }
  add_action('customize_register', 'wp_images_front');

function wp_blog_title ($wp_customize){
    // Section
    $wp_customize->add_section('blog', array(
      'title'   => __('Blog', 'simpla-jw'),
      'description' => sprintf(__('Blog','simpla-jw')),
      'priority'    => 150
    ));
    $wp_customize->add_setting('blog-name', array(
      'default'   => __('Noticias', 'simpla-jw'),
      'sanitize_callback' => 'esc_attr',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('blog-name', array(
      'label'   => __('Blog', 'simpla-jw'),
      'section' => 'blog',
      'priority'  => 1
    ));
    }
add_action('customize_register', 'wp_blog_title');

// wp_link_pages

$defaults = array(
		'before'           => '<p>' . __( 'Pages:', 'simpla-jw' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'simpla-jw'),
		'previouspagelink' => __( 'Previous page', 'simpla-jw' ),
		'pagelink'         => '%',
		'echo'             => 1
	);

        wp_link_pages( $defaults );

// Header Image 

$banner = array(
    'header-text'   => false,
	'width'         => 980,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/img/banner.png',
);
add_theme_support( 'custom-header', $banner );

$fondo = array(
	'default-image' => '',
    'default-position-y' => 'top',
    'default-size' => 'auto',
    'default-repeat' => 'repeat',
    'default-attachment' => 'scroll',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
    'default-color' => '000000'
);
add_theme_support( 'custom-background', $fondo );


add_editor_style( 'style.css' );
    
?>