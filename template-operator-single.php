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
 																<?php if (get_sub_field('cover_image')) : ?>
 																	<img src="<?php the_sub_field('cover_image'); ?>" alt="" class="coverImage" style="margin-bottom: 20px;">
 																<?php endif; ?>
 																<div class="grid-container terDetails">
 																	<div class="grid-x grid-padding-x grid-padding-y">
 																		<div class="large-8 cell">
 																			<?php if (get_sub_field('active')) : ?>
 																				<img class="licensed" width="40" alt="Licensed" src="<?php echo get_template_directory_uri() . '/assets/images/licensed.png' ?>">
 																			<?php endif; ?>
 																			<h5>TERRITORY <?php the_sub_field('territory_id'); ?> </h5>
 																			<h1><?php the_sub_field('territory_name'); ?></h1>
 																			<ul class="links">

 																				<li><a href="<?php the_sub_field("map_link") ?>">View Map</a></li>
 																				<li><a href="<?php the_sub_field("facebook") ?>" target="_blank">Facebook</a></li>
 																				<li><a href="<?php the_sub_field("instagram") ?>" target="_blank">Instagram</a></li>
 																				<li><a href="<?php the_sub_field("pdf") ?>">Download PDF</a></li>

 																			</ul>

 																		</div>
 																		<div class="large-4 cell text-center" style="position: relative;">
 																			<img class=" screenshot" src="<?php the_sub_field('screenshot_image'); ?>">
 																		</div>
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
 																						<?php
																							$zips = array();
																							if (have_rows('zip_codes')) {
																								while (have_rows('zip_codes')) {
																									the_row();
																									$zips[] = get_sub_field('zip_code');
																								}
																							}
																							echo implode(', ', $zips);
																							?>
 																					</span>
 																				</div>
 																				<div class="cell large-12 info2">
 																					Chamber: <a href="<?php the_sub_field('chamber_of_commerce_url'); ?>" target="_blank"><?php the_sub_field('chamber_of_commerce'); ?></a>
 																					<span>
 																						<?php if (get_sub_field('member_numbers')) : ?>
 																							(<?php number_format(the_sub_field('member_numbers')); ?>) members
 																						<?php endif; ?>
 																					</span>
 																				</div>
 																			</div>
 																		</div>
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
 		</div>
 	</section>
 </div><!-- end #container -->
 <?php wp_reset_postdata(); ?>

 <?php get_footer(); ?>