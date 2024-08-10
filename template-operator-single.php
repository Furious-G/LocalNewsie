 <?php
	/*
Template Name: Operator Territory Details 
*/

	get_header();
	$state = $_GET['state'];
	$territory = $_GET['territory'];
	$msa = $_GET['msa'];
	?>

 <?php
	query_posts(array(
		'post_type'  => 'operator',
		'order'    => 'ASC',
		'posts_per_page' => -1,
		'meta_query'    => array(
			'relation'      => 'AND',
			array(
				'key'       => 'msa_$_msa_name',
				'compare'   => '=',
				'value'     => $msa,
			),
			array(
				'key'       => 'state_code',
				'compare'   => '=',
				'value'     => $state,
			)
		)

	));

	?>
 <div class="container operator">
 	<section class="hero grid-container">
 		<div class="grid-x grid-padding-x align-center">
 			<div class="cell large-9 whiteBG">
 				<div class="grid-x grid-padding-x align-center">
 					<div class="large-12 cell top-title">
 						<!-- <h1>Territory Details</h1> -->
 						<div class="large-12 cell operatorContainer">
 							<!-- content -->
 							<div class="grid-x grid-padding-x grid-padding-y align-center">
 								<div class="large-12 cell nopad">
 									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 											<?php if (have_rows('msa')) : ?>
 												<?php while (have_rows('msa')) : the_row(); ?>
 													<?php if (have_rows('territory')) : ?>
 														<?php while (have_rows('territory')) : the_row(); ?>
 															<?php if (get_sub_field('territory_name') == $territory) : ?>
 																<!--DETAILS -->

 																<?php $count = count(get_sub_field('coverslider_images')) ?>


 																<?php if (have_rows('coverslider_images')) : ?>
 																	<?php if ($count == 1) : ?>
 																		<div class="singleCover">
 																		<?php else : ?>
 																			<div class="owl-carousel owl-theme" id="cover">
 																			<? endif; ?>
 																			<?php while (have_rows('coverslider_images')) : the_row(); ?>
 																				<div class="">
 																					<img src="<?php the_sub_field('slider_image'); ?>" alt="">
 																				</div>
 																			<?php endwhile; ?>
 																			</div>
 																		<?php else : ?>
 																			<div class="placeHolder">
 																				<h3><?php the_sub_field('territory_name'); ?></h3>
 																			</div>
 																		<?php endif; ?>

 																		<div class="grid-container terDetails">
 																			<div class="grid-x grid-padding-x grid-padding-y">
 																				<div class="large-8 cell" style="padding-right:0" ;>
 																					<?php if (get_sub_field('active')) : ?>
 																						<img class="licensed" width="40" alt="Licensed" src="<?php echo get_template_directory_uri() . '/assets/images/licensed.png' ?>">
 																					<?php endif; ?>
 																					<h5>TERRITORY <?php the_sub_field('territory_id'); ?> </h5>
 																					<h1><?php the_sub_field('territory_name'); ?></h1>
 																					<!-- Links -->
 																					<ul class="links">
 																						<li><a href="<?php echo the_sub_field("map_link") ?>" target="_blank">View Map</a></li>
 																						<li><a href="<?php the_sub_field("facebook") ?>" target="_blank">Facebook</a></li>
 																						<li><a href="<?php the_sub_field("instagram") ?>" target="_blank">Instagram</a></li>
 																						<li><a href="<?php the_sub_field("pdf") ?>">Download PDF</a></li>
 																					</ul>
 																					<!-- End Links  -->
 																				</div>
 																				<!-- Screenshot -->
 																				<div class="large-4 cell text-center" style="position: relative;">
 																					<img class="screenshot phoneframe" width="40" alt="Licensed" src="<?php echo get_template_directory_uri() . '/assets/images/phoneframe.png' ?>">
 																					<img class=" screenshot" src="<?php the_sub_field('screenshot_image'); ?>">
 																				</div>
 																				<!-- End Screenshot -->
 																				<!-- Main Details -->
 																				<div class="large-8 cell padR-0 pd-t-0">
 																					<div class="infoContainer">
 																						<div class="population info">
 																							Population<br />
 																							<span><?php the_sub_field('population'); ?></span>
 																						</div>
 																						<div class="density info">
 																							Density<br />
 																							<span><?php the_sub_field('population_density'); ?></span>
 																						</div>
 																						<div class="median info">
 																							Median Home Value / Income<br />
 																							<?php if (get_sub_field('median_home_value')) : ?>
 																								<span>$<?php the_sub_field('median_home_value'); ?></span>
 																							<?php endif; ?>
 																							<span>/</span>
 																							<?php if (get_sub_field('median_income')) : ?>
 																								<span>$<?php the_sub_field('median_income'); ?></span>
 																							<?php endif ?>
 																						</div>
 																						<div class="msa info">
 																							MSA<br />
 																							<span><?php echo $msa; ?></span>
 																						</div>
 																						<div class="zips info">
 																							Zip Codes<br />
 																							<span>
 																								<?php the_sub_field('zip_codes'); ?>
 																							</span>
 																						</div>
 																					</div>
 																				</div>
 																				<!-- End Main Details -->
 																				<!-- Chamber -->
 																				<div class="cell large-8 info2" style="padding-top:0">
 																					<span>CHAMBER:</span>
 																					<span>
 																						<a href="<?php the_sub_field('chamber_of_commerce_url'); ?>" target="_blank"><?php the_sub_field('chamber_of_commerce'); ?></a>
 																						<?php if (get_sub_field('member_numbers')) : ?>
 																							(<?php number_format(the_sub_field('member_numbers')); ?>) members
 																						<?php endif; ?>
 																					</span>
 																					<br />
 																					<?php if (get_sub_field('chamber_of_commerce2')) : ?>
 																						<span class="chahamber2">
 																							<a href="<?php the_sub_field('chamber_of_commerce_url2'); ?>" target="_blank"><?php the_sub_field('chamber_of_commerce2'); ?></a>
 																						</span>
 																						<span>
 																							<?php if (get_sub_field('member_numbers2')) : ?>
 																								(<?php number_format(the_sub_field('member_numbers2')); ?>) members
 																							<?php endif; ?>
 																						</span>
 																					<?php endif; ?>
 																				</div>
 																				<!-- End Chamber -->
 																				<!-- Publishers -->
 																				<div class="large-8 cell pubcarousel">
 																					<?php if (have_rows('publishers')) : ?>
 																						<h5>Publishers</h5>
 																						<div class="owl-carousel owl-theme" id="publishers">
 																							<?php while (have_rows('publishers')) : the_row(); ?>
 																								<div class="publisher">
 																									<img src="<?php the_sub_field('publisher'); ?>" alt="">
 																								</div>
 																							<?php endwhile; ?>
 																						</div>
 																					<?php endif; ?>
 																				</div>
 																				<!-- End Publishers -->
 																			</div>
 																		</div>
 																		<!-- End DETAILS -->
 																	<?php endif; ?>
 																<?php endwhile; ?>
 															<?php endif; ?>

 														<?php endwhile; ?>
 													<?php endif; ?>
 												<?php endwhile; ?>
 											<?php endif; ?>
 																		</div>
 								</div>
 								<!-- end content -->
 							</div>
 						</div>
 					</div>
 				</div>
 	</section>
 </div><!-- end #container -->
 <?php wp_reset_postdata(); ?>
 <script>
 	jQuery('#publishers').owlCarousel({
 		loop: true,
 		stagePadding: 3,
 		margin: 3,
 		nav: true,
 		responsive: {
 			0: {
 				items: 1
 			},
 			600: {
 				items: 3
 			},
 			1000: {
 				items: 8
 			}
 		}
 	});

 	jQuery('#cover').owlCarousel({
 		loop: true,
 		nav: true,
 		dots: false,
 		autoplay: true,
 		autoplayTimeout: 4400,
 		smartSpeed: 1500,
 		items: 1,
 		navText: ["<i class='fa-solid fa-chevrons-left'></i>", "<i class='fa-solid fa-chevrons-right'></i>"]
 	});
 </script>
 <?php get_footer(); ?>