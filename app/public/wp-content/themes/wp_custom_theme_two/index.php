<?php
/**
 * Site Index
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Handled in functions.php -->
    <!-- <link rel="stylesheet" href="wp-content/themes/wp_custom_theme_two/style.css"> -->

    <?php wp_head(); ?>

  </head>

  <header>
    <nav>

      <?php
        wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary'
              
            )
          );
      ?>

    </nav>
  </header>

  <body class="woocommerce">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="test">Hello</div>
    <script src="" async defer></script>

    <?php wp_footer(); ?>

  </body>
</html>