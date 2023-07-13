<?php
/*
Template Name: Contact
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

	</section>


			
	<div class="content">


	
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
