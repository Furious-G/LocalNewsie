<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			

<div class="container">
	<section class="hero grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell large-9 whiteBG2 teamPage">
				<div class="grid-x grid-padding-x grid-padding-y align-center">
					<div class="large-10 cell top-title">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="large-10 cell">
						<article class="content-not-found">
						
							<header class="article-header">
								<h1><?php _e( 'Epic 404 - Article Not Found', 'jointswp' ); ?></h1>
							</header> <!-- end article header -->
					
							<section class="entry-content">
								<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
							</section> <!-- end article section -->

							<section class="search">
							    <p><?php get_search_form(); ?></p>
							</section> <!-- end search section -->
					
						</article> <!-- end article -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div><!-- end #container -->



<?php get_footer(); ?>