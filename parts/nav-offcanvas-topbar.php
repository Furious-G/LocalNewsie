<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>



<!-- 			<?php 
			if ( is_page_template( 'template-gilbert.php' ) ) : ?>
						<a href="<?php echo home_url(); ?>">

							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/mainlogo2.png" class="mainLogo"></a>
			<?php  else : ?>
				<span class="cityTitle"><?php echo get_the_title(); ?></span>
			}
			<?php endif ?> -->

			
<div class="top-bar grid-container">
	<div class="float-left">
		<a href="<?php echo home_url(); ?>">
		<?php 
		$bodyClasses = get_body_class(); 
		if( is_front_page() || is_home() || in_array('whitepage',$bodyClasses) ): ?>
	    	<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/mainlogo2Orange.png" class="mainLogo"></a>
		<?php  else : ?>
			<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/mainlogo2.png" class="mainLogo"></a>
		<?php endif ?>
	</div>
	<?php if( is_front_page() || is_home() ): ?>
		<div class="show-for-large">
		<?php joints_top_nav(); ?>	
	<?php  else : ?>
		<div class="show-for-large tert">
		<?php joints_top_nav(); ?>
	<?php endif ?>
	</div>
	<div class="float-right hide-for-large">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><i class="fa-solid fa-bars"></i></a></li>
		</ul>
	</div>
</div>
