<?php
/*
Template Name: Partner
*/

get_header(); ?>


<div class="container">
	<section class="hero grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell large-9 whiteBG2 programPage">
				<div class="grid-x grid-padding-x grid-padding-y align-center partnerForm">
					<div class="large-10 cell top-title">
						<h1>Local Newsie Application</h1>
					</div>
					<div class="large-10 cell">
						<div class="grid-x grid-padding-x grid-margin-y grid-padding-y">
							<div class="large-12 cell">
							Please fill out everything to the best of your ability and we will get back within 24 hours. 
								<div class="form">
									
									<?php echo do_shortcode('[contact-form-7 id="334" title="Partner With Us"]'); ?>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div><!-- end #container -->




<?php get_footer(); ?>
