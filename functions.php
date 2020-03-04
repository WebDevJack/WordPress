<?php 

/*
   The functions.php file for the custom WordPress theme.
*/

if ( !function_exists("customtheme_setup") ) :

  function theme_setup() {

    add_theme_support("menus");

    register_nav_menus ( array (
      "primary"    =>  __( "Primary Menu", "customtheme" ),
      "secondary"  =>  __( "Secondary Menu", "customtheme" )
    ) );


  }

endif;

add_action( 'after_setup_theme', 'customtheme_setup' );

?>
