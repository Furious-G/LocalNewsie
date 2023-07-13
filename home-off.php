<?php
/*
Template Name: Home
*/

get_header(); ?>

<style>



/* svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 112px;
    background:transparent;
} */
	</style>
<div class="container home">
	<section class="hero grid-container home">
		<div class="grid-x grid-padding-x">
			<div class="cell large-5">
				<h1>The best<br><span>alternative<br>to local<br>news</span></h1>
				<div class="downApps flex-container">
					<a href="" class="flex-container align-center-middle">
						<i class="fa-brands fa-apple"></i>
						<div>
							<span>Download on the</span><span>App Store</span>
						</div>
					</a>
					<a href="" class="flex-container align-center-middle">
						<i class="fa-brands fa-google-play"></i>
						<div>
							<span>Get it on</span><span>Play Store</span>
						</div>
					</a>
				</div>

			</div>
			<div class="cell large-7">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-robot.png" class="heroRobot" />
			</div>

		</div>
	</section>

<!--     <svg data-name="Layer 1" class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,27.35 A600.21,600.21,0,0,0,321.39,56.44
                 C379.39,45.65,435.545,26.31,493.39,14.58
                 C575.78,-2.14,661.58,-3.15,743.84,14.19
                 C823.78,31,906.67,72,985.66,92.83
                 C1055.71,111.31,1132.19,118.92,1200,95.83V120H0Z" class="shape-fill" fill="white"></path>
    </svg> -->
			
	<div class="content">

		<section class="flip-boxes grid-container pd-b-100">
			<div class="grid-x grid-padding-x">
				<div class="cell large-4 text-center">
					<div class="flipBox wow zoomIn" data-wow-delay=".3s">
						<span class="flex-container align-center-middle"><i class="fa-thin fa-bullhorn"></i></span>
						<h3>Currated News</h3>
						 Lorem ipsum dolor sit amet into consectetur adipiscing elit, sed do eiusmod tempor incid.
					</div>
				</div>
				<div class="cell large-4 text-center">
					<div class="flipBox wow zoomIn" data-wow-delay=".3s">
						<span class="flex-container align-center-middle"><i class="fa-thin fa-calendar-star"></i></span>
						<h3>Great Events</h3>
						 Lorem ipsum dolor sit amet into consectetur adipiscing elit, sed do eiusmod tempor incid.
					</div>
				</div>
				<div class="cell large-4 text-center">
					<div class="flipBox wow zoomIn" data-wow-delay=".3s">
						<span class="flex-container align-center-middle"><i class="fa-thin fa-map"></i></span>
						<h3>Local Guide</h3>
						 Lorem ipsum dolor sit amet into consectetur adipiscing elit, sed do eiusmod tempor incid.
					</div>
				</div>
			</div>
		</section>

		<section class="homeVid  flex-container align-center-middle">

			<div class="text-center">
				<i class="fa-solid fa-play"></i>
				<span>How newsie works</span>
			</div>

		</section>

		<section class="grid-container homeContact pd-t-60">
			<div class="grid-x grid-padding-x">
				<div class="cell large-6">
					<h2>
						We designed the perfect app for you
					</h2>
					<div class="accord">
						Cras accumsan pretium dignissim. Curabitur a orci lorem. Phasellus tempor dolor vel odio efficitur ac sollicitudin.



						<ul class="accordion" data-accordion>
						  <li class="accordion-item is-active" data-accordion-item>
						    <!-- Accordion tab title -->
						    <a href="#" class="accordion-title">How can I install the App?</a>

						    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
						    <div class="accordion-content" data-tab-content>
						      <p>
						      	Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin scelerisque nisi urna. Duis rutrum non risus in imperdiet.
						      </p>
						    </div>
						  </li>
						  <li class="accordion-item" data-accordion-item>
						    <!-- Accordion tab title -->
						    <a href="#" class="accordion-title">What are the main features of this App?</a>

						    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
						    <div class="accordion-content" data-tab-content>
						      <p>
						      	Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin scelerisque nisi urna. Duis rutrum non risus in imperdiet.
						      </p>
						    </div>
						  </li>
						   <li class="accordion-item" data-accordion-item>
						    <!-- Accordion tab title -->
						    <a href="#" class="accordion-title">How do I list my business with newsie?</a>

						    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
						    <div class="accordion-content" data-tab-content>
						      <p>
						      	Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin scelerisque nisi urna. Duis rutrum non risus in imperdiet.
						      </p>
						    </div>
						  </li>
						  <!-- ... -->
						</ul>

					</div>

				</div>
				<div class="cell large-6 text-center flex-container align-right">
					<div>
						<span>Get in touch with us</span>
						<div class="contactContainer">
							<?php echo do_shortcode("[contact-form-7 id='329' title='Home Contact form']"); ?>
						</div>
					</div>
				</div>

				<div class="cell large-12 countup">
					<div class="counterBox flex-container align-spaced  align-middle">
						<div class="wow zoomIn" data-wow-delay=".3s">
							<span class="counter" data-count="12">12</span>M+
							<span class="sub">Downloads</span>
						</div>
						<div class="wow zoomIn" data-wow-delay=".3s">
							<span class="counter" data-count="18">18</span>M+
							<span class="sub">Active Users</span>
						</div>
						<div class="wow zoomIn" data-wow-delay=".3s">
							<span class="counter" data-count="4.9">4.9</span>
							<span class="sub">Rating</span>
						</div>
						<div class="wow zoomIn" data-wow-delay=".3s">
							<span class="counter" data-count="300">300</span>M+
							<span class="sub">Happy Clients</span>
						</div>
					</div>
				</div>

				<div class="cell large-12 homePartner text-center pd-t-80 pd-b-80">
					<img  class="wow rotateIn" data-wow-delay=".3s" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Newsie-Icon.png" id="logohead"/>
					<h2 class="pd-t-20">Want to partner with us?</h2>
					Lorem Ipsum is simply dummy text of the printing and typesetting<br>
					industry. Lorem Ipsum has been the industry's standard.<br>
					<a href="/contact" class="btn BtnLargeRound mg-t-30 hvr-float-shadow">Contact Us</a>
				</div>
			</div>
		</section>
	
	</div> <!-- end #content -->
</div><!-- end #container -->




<script>
jQuery(document).ready(function($){

// jQuery('.counter').each(function() {
//   var $this = jQuery(this),
//       countTo = $this.attr('data-count');
 
//   jQuery({ countNum: $this.text()}).animate({
//     countNum: countTo
//   },

//   {
//     duration: 8000,
//     easing:'linear',
//     step: function() {
//       $this.text(Math.floor(this.countNum));
//     },
//     complete: function() {
//       $this.text(this.countNum);
//       //alert('finished');
//     }
//   });  
 
// });


$(function() {
  $(".logo_container").on("mouseleave", function() {
    $("#slogans .slogan:first").appendTo($("#slogans"));
  });
});

});

  wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       50,          // default
      mobile:       false,       // default
      live:         true        // default
    }
  )
  wow.init();

</script>
<?php get_footer(); ?>
