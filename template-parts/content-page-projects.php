<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RIchardson_Web
 */

?>



	<div class="entry-content page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">

					<h2><?php the_title(); ?></h2>

					<?php
					the_content();
					?>

				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<?php
				$args = array(
            'post_type' => 'project',
            'meta_key' => 'project_oprions_order',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
						'post_per_page'=> -1
        );

				 $loop = new WP_Query($args); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="col-sm-3 col-xs-6 project-container">
							<div class="project-inner">
								<a href="<?php echo get_post_meta( $post->ID, 'project_oprions_link-to-site', true ); ?>" target="_blank,
									'post_per_page'=> -1">
									<div class="project-thumb-container">
										<?php the_post_thumbnail('project-thumb', array('class' => 'responsive-image project-thumb')); ?>
									</div>
									<h3><?php the_title(); ?></h3>
								</a>
							</div>
						</div>

					<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>






	</div><!-- .entry-content -->
