<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="large-2 cell text-center footerLogo">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.png" />
		    				</div>

		    				<div class="large-8 cell text-center footerNav">
		    						<?php joints_footer_links(); ?>
		    				</div>

		    				<div class="large-2 cell social medium-text-center small-text-center large-text-right">
		    					<a href="mailto:info@localnewsie.com"><i class="fa-regular fa-at"></i></a>
		    					<a href="https://www.instagram.com/newsieapp" target="_blank"><i class="fa-brands fa-instagram"></i></a>
		    					<a href="https://www.facebook.com/newsieapp" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
		    				</div>

						</div>
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
				<div class="text-center subFooter">
		    			&copy; <?php echo date("Y"); ?> <strong>Newsie Inc</strong>, All Rights Reserved
		    	</div>
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->