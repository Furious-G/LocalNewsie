<?php
/*
Template Name: Inner
*/

get_header(); ?>

<style>

.cascade-slider_container {
  position: relative;
  width: 1200px;
  height: 250px;
  margin: 25px auto;
  padding-top: 150px;
}

.cascade-slider_item {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%) scale(0.3);
  transition: all 1s ease;
  opacity: 0;
  z-index: -1;
  text-align: center;
}
.cascade-slider_item img {
  width: 400px;
}

.cascade-slider_item.next {
  left: 50%;
  transform: translateY(-50%) translateX(-150%) scale(0.6);
  opacity: 1;
  z-index: 1;
}

.cascade-slider_item.prev {
  left: 50%;
  transform: translateY(-50%) translateX(50%) scale(0.6);
  opacity: 1;
  z-index: 1;
}

.cascade-slider_item.now {
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%) scale(1);
  opacity: 1;
  z-index: 5;
}

.cascade-slider_arrow {
  display: inline-block;
  position: absolute;
  top: 50%;
  cursor: pointer;
  z-index: 5;
  
}

.cascade-slider_arrow-left { left: 0; }

.cascade-slider_arrow-right { right: 0; }

.cascade-slider_nav {
  position: absolute;
  bottom: -120px;
  width: 100%;
  text-align: center;
  z-index: 5;
}

.cascade-slider_dot {
  display: inline-block;
  width: 1em;
  height: 1em;
  margin: 1em;
  background: #ddd;
  list-style: none;
  cursor: pointer;
}

.cascade-slider_dot:hover { background: #555; }

.cascade-slider_dot.cur { background: #555; }
	</style>
<div class="container home">
	<section class="hero grid-container home">
		<div class="grid-x grid-padding-x">

<div class="cascade-slider_container" id="cascade-slider">
  <div class="cascade-slider_slides">
    <div class="cascade-slider_item">
      <img src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/demo/demo-story.png">
    </div>
    <div class="cascade-slider_item">
      <<img src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/demo/demo-newsie.png">
    </div>
    <div class="cascade-slider_item">
      <img src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/demo/demo-directory.png">
    </div>
    <div class="cascade-slider_item">
      <img src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/demo/demo-listing.png">
    </div>
    <div class="cascade-slider_item">
      <img src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/demo/demo-story.png">
    </div>
    <div class="cascade-slider_item">
      <<img src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/demo/demo-newsie.png">
    </div>
    <div class="cascade-slider_item">
      <img src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/demo/demo-directory.png">
    </div>
    <div class="cascade-slider_item">
      <img src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/demo/demo-listing.png">
    </div>
  </div>

  <ol class="cascade-slider_nav">
    <li class="cascade-slider_dot cur"></li>
    <li class="cascade-slider_dot"></li>
    <li class="cascade-slider_dot"></li>
    <li class="cascade-slider_dot"></li>
    <li class="cascade-slider_dot"></li>
    <li class="cascade-slider_dot"></li>
  </ol>

  <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev">Prev</span>
  <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next">Next</span>
</div>
	</section>

			
	<div class="content">

	
	</div> <!-- end #content -->
</div><!-- end #container -->


<script src="https://www.jqueryscript.net/demo/Minimal-3D-Image-Rotator-with-jQuery-CSS3-Cascade-Slider/cascade-slider.js"></script>

<script type="text/javascript">
  
jQuery('#cascade-slider').cascadeSlider({
  itemClass: 'cascade-slider_item',
  arrowClass: 'cascade-slider_arrow'
});

</script>
<?php get_footer(); ?>
