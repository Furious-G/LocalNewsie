<?php
function site_scripts()
{
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way


  wp_enqueue_style('google-font1', 'https://fonts.googleapis.com/css2?family=Suez+One&display=swap', false, '1.0.0');

  // Register Foundation scripts
  wp_enqueue_script('foundation-js', get_template_directory_uri() . '/foundation-sites/dist/js/foundation.min.js', array('jquery'), "6.4.1", true);

  // Register Foundation styles
  wp_enqueue_style('foundation-css', get_template_directory_uri() . '/foundation-sites/dist/css/foundation.min.css', array(), "6.4.1", 'all');;

  // Adding scripts file in the footer
  wp_enqueue_script('site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array('jquery'), filemtime(get_template_directory() . '/assets/scripts'), true);



  // Register main stylesheet
  wp_enqueue_style('site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles'), 'all');

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;600,700&display=swap', array(), null);

  wp_enqueue_style('google-fonts2', 'https://fonts.googleapis.com/css2?family=Lobster&display=swap', array(), null);



  wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/kmf6fbj.css', false);

  // Comment reply script for threaded comments
  if (is_singular() and comments_open() and (get_option('thread_comments') == 1)) {
    wp_enqueue_script('comment-reply');
  }



  // Custom Stuff Below


  wp_register_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.0.0');
  wp_enqueue_script('wow');



  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.css', false, '1.0.0');


  wp_enqueue_style('hover-css', 'https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css', false, '1.0.0');

  // LIGHTBOX

  wp_register_script('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js', array(), '1.0.0');
  wp_enqueue_script('lightbox');

  wp_enqueue_style('lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css', false, '1.0.0');

  wp_register_script('modal-js',  'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js', array(), '1.0.0');
  wp_enqueue_script('modal-js');

  wp_register_script('owl',  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '1.0.0');
  wp_enqueue_script('owl');

  wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', false, '1.0.0');

  wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', false, '1.0.0');


  wp_register_script('wpnumb',  'https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js', array(), '1.0.0');
  wp_enqueue_script('wpnumb');

  wp_register_script('nouislider',  'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js', array(), '1.0.0');
  wp_enqueue_script('nouislider');


  wp_enqueue_script('mask-js', get_template_directory_uri() . '/assets/scripts/jquery.maskedinput.js', array('jquery'), filemtime(get_template_directory() . '/assets/scripts'), true);

  wp_enqueue_script('phone-js', get_template_directory_uri() . '/assets/scripts/jquery.maskedinput.min.js', array('jquery'), filemtime(get_template_directory() . '/assets/scripts'), true);

  // wp_enqueue_script( 'jqmask', get_template_directory_uri() . '/assets/scripts/jquery.mask.min.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts'), true );




  wp_enqueue_style('no-ui-css', 'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css', false, '1.0.0');


  wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/styles/css/custom.css', array(), filemtime(get_template_directory() . '/assets/styles/css'), 'all');
  wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '1.0.0');

  wp_enqueue_style('modal-css', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.css', array(), filemtime(get_template_directory() . '/assets/styles/css'), 'all');

  wp_register_script('modal-js',  'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js', array(), '1.0.0');
  wp_enqueue_script('modal-js');
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);



function onboard_scripts()
{
  if (is_page(array('onboarding'))) {
    wp_enqueue_script('onboard-js', get_template_directory_uri() . '/assets/scripts/onboard.js', array('jquery'), filemtime(get_template_directory() . '/assets/scripts'), true);
  }
}
add_action('wp_enqueue_scripts', 'onboard_scripts');
