<?php 

add_theme_support('post-thumbnails');

add_theme_support('custom-logo');

add_theme_support('title-tag');



register_nav_menus( array(
 'main' => 'Menu Principal',
 'footer' => 'Bas de page',
 ) );

 function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
  
  add_filter( 'nav_menu_link_attributes', 'menu_add_class', 10, 3 );
  
  function menu_add_class( $atts, $item, $args ) {
      $class = 'nav-link'; // or something based on $item
      $atts['class'] = $class;
      return $atts;
  }

 function create_post_type() {
    register_post_type( 'acme_produit',
      array(
        'labels' => array(
          'name' => __( 'produit' ),
          'singular_name' => __( 'produit' )
        ),
        'public' => true,
        'has_archive' => true,
      )
    );
  }
  add_action( 'init', 'create_post_type' );
