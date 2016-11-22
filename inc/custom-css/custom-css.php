<?php

  function custom_css() {
    ?>

    <!-- TEMP DELETE -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
    <!-- TEMP DELETE -->

    <link href="https://fonts.googleapis.com/css?family=<?php echo get_theme_mod( 'site_default', 'Open+Sans' ); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=<?php echo get_theme_mod( 'site_title', 'Roboto' ); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=<?php echo get_theme_mod( 'site_headings', 'Roboto' ); ?>" rel="stylesheet">

    <style>

    /* Fonts */

      .site-title{
        font-family: <?php echo get_theme_mod( 'site_title', 'Roboto' ); ?>;
      }

      .content-area{
        font-family: 'Noto Serif', serif;
      }

      .content-area h2, .square-link{
        font-family: <?php echo get_theme_mod( 'site_title', 'Roboto' ); ?>;
      }

      .front-page__branding{
        background-image: url("<?php echo esc_url(get_theme_mod( 'lp-image_selector', '' )); ?>");
        background-color:<?php echo get_theme_mod( 'site_color', 'red' ); ?> ;
      }

      .module--background, .module--block, .site-header{
        background-color:<?php echo get_theme_mod( 'site_color', 'red' ); ?> ;
      }

      .main-navigation a:hover{
        background: <?php echo get_theme_mod( 'site_color', 'red' ); ?> ;
      }
    </style>
    <?php
  }

?>
