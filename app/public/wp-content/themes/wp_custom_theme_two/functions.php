<?php
/**
 * functions
 */
?>
<?php
 function wp_custom_theme_two_config() {

  add_theme_support("woocommerce", array(
    "thumbnail_image_width" => 550,
    "single_image_width" => 200,
    "product_grid" => array(

    )
  ));

  }
  add_action("after_setup_theme", "wp_custom_theme_two_config");

  function theme_two_menus() {

    $locations = array(
      'primary' => "Desktop Primary Left Sidebar",
    );

    register_nav_menus($locations);

  }
  
  add_action('init', 'theme_two_menus');

  function theme_two_register_styles() {

  $version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style('theme_two-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  }
  
  add_action('wp_enqueue_scripts', 'theme_two_register_styles');

?>