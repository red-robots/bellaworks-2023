<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
			<div class="wrapper">
				<?php
				while ( have_posts() ) : the_post(); 
					$client_logo = get_field('featured_image');
					$siteLink = get_field('link_to_website');
					echo '<pre>';
					print_r($siteLink);
					echo '</pre>';
					?>
					<header class="entry-header portfolio-header">
						<?php if($client_logo){ ?>
							<div class="client-logo">
								<img src="<?php echo $client_logo['url']; ?>" alt="<?php echo $client_logo['alt']; ?>">
							</div>
						<?php } ?>
						<?php the_title( '<h1 class="portfolio-title">', '</h1>' ); ?>
						<?php if($siteLink){ ?>
							<div class="visit-site">
								<a href="<?php echo $siteLink; ?>" target="_blank">Visit Site <i class="fa-solid fa-chevron-right"></i></a>
							</div>
						<?php } ?>
					</header><!-- .entry-header -->

					<section class="portfolio-top">

						<article class="portfolio-post">
							<?php the_content(); ?>
							<?php //get_template_part('template-parts/single-side'); ?>
							<div class="cta">
								<h3>Ready to start your project?</h3>
								<div class="button">
									<div class="action">
										<a href="<?php bloginfo('url'); ?>/lets-do-this">
											<div class="circle">
										      <span class="icon arrow"></span>
										    </div>
											<p class="button-text blue">Get a Quote.</p>
										</a>
									</div>
								</div>
							</div>
						</article>
						
						<?php if(have_rows('gallery')): ?>
							<div class="gallery">
								<?php while(have_rows('gallery')): the_row(); 
								$img = get_sub_field('image');
								?>
								<div class="img">
									<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
								</div>
							<?php endwhile; ?>
							
							</div>
						<?php endif; ?>

						


					</section>

					<div class="post-content">
						<section class="post">
							
						</section>
						
						
					</div>

				<?php endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
