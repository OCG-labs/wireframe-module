<?php
/**
 * Load WireFrame css
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen
 */
if( !is_admin() ) :
  if( !function_exists( 'ot_load_wireframe_css' ) ) :
    function ot_load_wireframe_css() {
      if(!is_child_theme()){
        wp_register_style( 'wireframe_css', get_template_directory_uri().'/lib/modules/wireframe/css/wireframe.css', array(), '1.0', 'all');
    } else {
        wp_register_style( 'wireframe_css', get_stylesheet_directory_uri().'/lib/modules/wireframe/css/wireframe.css', array(), '1.0', 'all');
    }
      wp_enqueue_style( 'wireframe_css' );
    }
    add_action( 'wp_enqueue_scripts', 'ot_load_wireframe_css' );

  endif;

endif;
