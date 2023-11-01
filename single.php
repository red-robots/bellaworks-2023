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
				while ( have_posts() ) : the_post(); ?>
					<header class="entry-header">
						<?php the_title( '<h1 class="single-title">', '</h1>' ); ?>
						<div class="date"><?php the_date(); ?></div>
					</header><!-- .entry-header -->

					<?php if( has_post_thumbnail() ) { ?>
						<div class="featured-image">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php } ?>

					<div class="post-content">
						<section class="post">
							<article class="post">


								<?php the_content(); ?>
							</article>
							<footer class="links">
								<div class="tags">
									Categorized: 
									<?php
									foreach(get_the_category($post->ID) as $cat) {
									    echo '<li><a href="' . get_tag_link($cat->term_id) . '">' . $cat->name . '</a></li>';
									}
									?>
								</div>
								<div class="tags">
									Tagged: 
									<?php
									foreach(get_the_tags($post->ID) as $tag) {
									    echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
									}
									?>
								</div>
							</footer>
						</section>
						
						<?php get_template_part('template-parts/single-side'); ?>
					</div>

				<?php endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
