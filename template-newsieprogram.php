<?php
/*
Template Name: Newsie Program
*/

get_header(); ?>


<div class="container">
	<section class="hero grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell large-9 whiteBG2 programPage">
				<div class="grid-x grid-padding-x align-center">
					<div class="large-10 cell top-title">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="large-10 cell pd-t-10">
						<div class="grid-x grid-padding-x grid-margin-y grid-padding-y">
							<div class="large-12 cell">
								<h2>OPPORTUNITY FOR</h2>
								<h2 class="sub">ENTREPRENEURS!</h2>
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/program-banner.png" class="">
								
									<?php if( get_field('quote') ): ?>
										<blockquote>
    									<?php the_field('quote'); ?>
    									</blockquote>
									<?php endif; ?>
								
									<?php the_field('text'); ?>

							</div>
							<div class="large-12 cell large-text-center pd-t-20">
								<a href="/local-newsie-application" class="gradBtn">Apply Today</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


		
</div><!-- end #container -->




<?php get_footer(); ?>
