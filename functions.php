<?php 





function add_theme_scripts() {

  $nectar_theme_version = nectar_get_theme_version();
  
  /* enq. our custom styles - the file is prepended with an abc-prefix,
  that stands for AutoBahnCopenhagen */
  wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/css/abc_style.css', '', $nectar_theme_version );

  /* enq. our custom.js */
  wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/custom.js', array(), false, true );

  if ( is_rtl() ) { 
    wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' ); 
  }
}

/* wip: trying to load our child theme styles last */
add_action( 'wp_enqueue_scripts', 'add_theme_scripts');


function salient_redux_custom_fonts( $custom_fonts ) {
  return array(
    'Custom Fonts' => array(
      'neue-haas-unica, sans-serif' => "Neue Haas Unica"
    )
  );
}

add_filter( "redux/salient_redux/field/typography/custom_fonts", "salient_redux_custom_fonts" );


?>