<?php
/**
 * Template Name: Project Page
 *
 * @package WordPress
 * @subpackage Transition
 * @since Transition 1.0
 */

 get_header(); ?>


 	<div id="primary" class="content-area">
 		<main id="main" class="site-main " role="main">

 			<?php
 			while ( have_posts() ) : the_post();

 				get_template_part( 'template-parts/content', 'page-projects' );



 			endwhile; // End of the loop.
 			?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 get_footer();

?>
