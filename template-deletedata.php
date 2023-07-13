<?php
/*
Template Name: Delete Data
*/



get_header(); ?>

<style type="text/css">
	

.partnerForm label{
	padding-bottom:10px;
}

.partnerForm .subBtn {
	margin-right: 0px;
}


</style>

<div class="container">
	<section class="hero grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell large-9 whiteBG2 programPage">
				<div class="grid-x grid-padding-x grid-padding-y align-center partnerForm">
					<div class="large-10 cell top-title">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="large-10 cell">
						<div class="grid-x grid-padding-x grid-margin-y grid-padding-y">
							<div class="large-12 cell">
							You can submit a request to delete certain data that the developer collected through this app, without deleting your entire account. This data can include things like activity history, transaction history, and images and video.
								<div class="form">
									
									<?php echo do_shortcode ('[contact-form-7 id="1205" title="Delete Data"]') ?>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div><!-- end #container -->




<?php get_footer(); ?>
