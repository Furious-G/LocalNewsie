<?php
/*
Template Name: Default Inner
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
						<div class="grid-x grid-padding-x grid-margin-y grid-padding-y align-middle">
							<div class="large-12 cell">
								<?php the_content(); ?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div><!-- end #container -->






<?php get_footer(); ?>
