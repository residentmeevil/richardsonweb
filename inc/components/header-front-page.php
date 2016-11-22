<?php
  function get_header_front_page(){

   doctype();  ?>
   <header id="masthead" role="banner">

   <div class="front-page__branding">
     <div class="title-container">
     <?php
     if ( is_front_page() && is_home() ) : ?>
       <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
     <?php else : ?>
       <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
     <?php
     endif;

     $description = get_bloginfo( 'description', 'display' );
     if ( $description || is_customize_preview() ) : ?>
       <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
     <?php
     endif; ?>
    </div>

    <video autoplay loop class="fullscreen-video js-front-page-video">
      <source src="" type="video/mp4" id="talk-video" data-video="<?php echo get_stylesheet_directory_uri(); ?>/video/talk.mp4">
      Your browser does not support HTML5 video.
    </video>
   </div><!-- .site-branding -->

   <?php	primary_nav(); ?>

<?php
  }
 ?>
