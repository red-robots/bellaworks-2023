<?php
/**
 * Template Name: Services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

$block_1_title = get_field('block_1_title');
$block_1_subtitle = get_field('block_1_subtitle');
$block_1_text = get_field('block_1_text');
$block_2_title = get_field('block_2_title');
$block_2_subtitle = get_field('block_2_subtitle');
$block_2_text = get_field('block_2_text');
$block_3_title = get_field('block_3_title');
$block_3_subtitle = get_field('block_3_subtitle');
$block_3_text = get_field('block_3_text');



?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
			<div class="wrapper">
				<?php
				while ( have_posts() ) : the_post(); 

					get_template_part('inc/title');


				endwhile; // End of the loop.
				?>

				<?php
			/* Start the Loop */
			$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
			if ( have_posts() ) : the_post(); 
				
				// $hero = get_field('hero_text');
				// $hero_small = get_field('hero_small');
				// $second_block_copy_lead = get_field('second_block_copy_lead');
				// $second_block_copy = get_field('second_block_copy');
				$service_1_title = get_field('service_1_title');
				$service_1_copy = get_field('service_1_copy');
				$service_2_title = get_field('service_2_title');
				$service_2_copy = get_field('service_2_copy');
				$service_3_title = get_field('service_3_title');
				$service_3_copy = get_field('service_3_copy');

			endif; ?>

				<section class="news service-page">
					
						<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
								'post_type'=>'service',
								'posts_per_page' => -1
							));
						if ($wp_query->have_posts()) : ?>
							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); 
								$show = get_field('show_on_services_page');
									if( $show != 'no' ) {
									$exc = get_field('excerpt');
								?>
								<div class="third blogpost ">
									<div class="js-blocks">
										<!-- <div class="icon">
											<img src="<?php bloginfo('template_url'); ?>/images/icon_mock5.png">	
										</div> -->
										<h2><?php the_title(); ?></h2>
										<?php if( $exc ) { echo '<div>'.$exc.'</div>'; } ?>
										
									</div>	
									<div class="permalink">
										<i class="fas fa-chevron-right"></i><span class="seemores">read more</span>
									</div>
									<div class="bottom"></div>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							<?php } ?>
							<?php endwhile; ?>
						<?php endif; ?>
					
					
				</section>
			</div>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
