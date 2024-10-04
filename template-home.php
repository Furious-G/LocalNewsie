<?php
/*
Template Name: Home
*/

get_header(); ?>

<style>

</style>
<div class="container home">
	<section class="hero cell home">

		<?php echo do_shortcode("[theta-carousel id='733']"); ?>

	</section>

	<div class="content">

		<section class="flip-boxes grid-container secPad pd-t-30">
			<div class="grid-x grid-padding-x">

				<?php if (have_rows('block_1')) : ?>
					<?php while (have_rows('block_1')) : the_row(); ?>
						<div class="cell large-4 medium-4 text-center">
							<div class="flipBox  zoomIn" data-wow-delay=".3s">
								<span class="flex-container align-center-middle"><img src="<?php the_sub_field('icon'); ?>" /></span>
								<h3><?php the_sub_field('title'); ?></h3>
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>


				<?php if (have_rows('block_2')) : ?>
					<?php while (have_rows('block_2')) : the_row(); ?>
						<div class="cell large-4 medium-4 text-center">
							<div class="flipBox zoomIn" data-wow-delay=".3s">
								<span class="flex-container align-center-middle"><img src="<?php the_sub_field('icon'); ?>" /></span>
								<h3><?php the_sub_field('title'); ?></h3>
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php if (have_rows('block_3')) : ?>
					<?php while (have_rows('block_3')) : the_row(); ?>
						<div class="cell large-4 medium-4 text-center">
							<div class="flipBox zoomIn" data-wow-delay=".3s">
								<span class="flex-container align-center-middle"><img src="<?php the_sub_field('icon'); ?>" /></span>
								<h3><?php the_sub_field('title'); ?></h3>
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

		</section>

		<!-- <section class="grid-container secPad">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/color.jpg" class="wow zoomIn" data-wow-delay=".3s" />
		</section> -->

		<section class="grid-container homeContact secPad">
			<div class="grid-x grid-padding-x">
				<div class="cell large-6 wow slideInLeft" data-wow-delay=".3s">
					<h2>
						We designed the perfect app for you
					</h2>
					<div class="homeAccord">
						Build your community using the only platform that was actually created for it!
						<ul class="accordion" data-accordion>

							<?php
							query_posts(array(
								'post_type'  => 'faqs',
								'order'    => 'ASC',
								'posts_per_page' => -1
							));
							?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php if (get_field('home')) : ?>
										<li class="accordion-item" data-accordion-item>
											<!-- Accordion tab title -->
											<a href="#" class="accordion-title"><?php the_field('question'); ?></a>

											<!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
											<div class="accordion-content" data-tab-content>
												<p>
													<?php the_field('answer'); ?>
												</p>
											</div>
										</li>
									<?php endif ?>

								<?php endwhile ?>
							<?php endif ?>
							<?php wp_reset_query();   // Restore global post data stomped by the_post(). 
							?>
							<!-- ... -->

						</ul>
					</div>
				</div>

				<div class="cell large-6 text-center flex-container align-right  wow slideInRight" data-wow-delay=".3s">
					<div>
						<!-- <span>Get in touch with us</span> -->
						<div class="contactContainer">
							<?php echo do_shortcode("[contact-form-7 id='329' title='Home Contact form']"); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="grid-container pd-b-60">
			<div class="large-12 text-center cell pd-b-20"><strong>POWERED BY</strong></div>
			<div class="grid-x grid-padding-x">
				<div class="cell large-12 poweredBy">
					<?php if (have_rows('powered_by')) : ?>

						<?php while (have_rows('powered_by')) : the_row(); ?>
							<div>
								<img src="<?php the_sub_field('company_logo'); ?>" alt="<?php the_sub_field('name'); ?>">
							</div>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</section>

	</div> <!-- end #content -->
</div><!-- end #container -->


<script>
	jQuery(document).ready(function($) {

		$(window).load(function() {
			$('.theta-carousel-outer-container').css('visibility', 'visible');
		});

		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 0,
			center: true,
			autoplay: true,
			slideTransition: 'linear',
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			dots: true,
			// navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'>"],
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 3
				},
				1024: {
					items: 4
				},
				1200: {
					items: 6
				}
			}
		})

	});

	// wow = new WOW(
	//   {
	//     boxClass:     'wow',      // default
	//     animateClass: 'animated', // default
	//     offset:       50,          // default
	//     mobile:       false,       // default
	//     live:         true        // default
	//   }
	// )
	// wow.init();
</script>
<?php get_footer(); ?>