<?php

/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory() . '/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory() . '/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory() . '/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory() . '/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory() . '/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory() . '/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory() . '/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory() . '/functions/translation/translation.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 



// ADMIN STYLES
function admin_seperators()
{
  echo '<style type="text/css">
        #adminmenu li.wp-menu-separator {margin: 0; height: 8px; background:transparent !important; border-bottom: dotted #fff 2px; }
        .admin-color-fresh #adminmenu li.wp-menu-separator {background: #000;}
        #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap{background:#000}
    
        #adminmenu li.current a.menu-top, 
        #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu{background:#000 !important;}
        #adminmenu li.current a.menu-top:hover,
        #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu:hover{color: !important;}
        #adminmenu li.wp-menu-separator{opacity:.8 !important}
        .large-side-bar-logo{max-width:120px !important;}
        #adminmenu .wp-has-current-submenu .wp-submenu{background:#2e2e2f  !important;}
        body.wp-admin{background:#d9d9d9  !important;}

        #ss-socialsnap-main,#dashboard_primary{display:none;}
#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
  background: #464646;}
  #wpadminbar{background:#464646 !important}
}

         </style>';
}
add_action('admin_head', 'admin_seperators');


// Repeatable fields

function customize_add_button_atts($attributes)
{
  return array_merge($attributes, array(
    'text' => '+ Add Business',
    'additional_classes' => 'addBtn',
  ));
}
add_filter('wpcf7_field_group_add_button_atts', 'customize_add_button_atts');


function customize_remove_button_atts($attributes)
{
  return array_merge($attributes, array(
    'text' => '- Remove Business',
    'additional_classes' => 'removeBtn',
  ));
}
add_filter('wpcf7_field_group_remove_button_atts', 'customize_remove_button_atts');

// filter for sub field query
function my_posts_where($where)
{

  $where = str_replace("meta_key = 'msa_$", "meta_key LIKE 'msa_%", $where);

  return $where;
}

add_filter('posts_where', 'my_posts_where');


// filter for msa field query
function msa_where($where)
{

  $where = str_replace("meta_key = 'msa_$", "meta_key LIKE 'msa_%", $where);

  return $where;
}

add_filter('posts_where', 'msa_where');


// Operator page List Ajax
function filter_operator()
{
  $catSlug = $_POST['category'];

  $ajaxposts = new WP_Query([
    'post_type'  => 'operator',
    'order'    => 'ASC',
    'meta_key'      => 'state_code',
    'meta_value'    => $catSlug

  ]);
  $response = '';

  if ($ajaxposts->have_posts()) {
    while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $response .= get_template_part('parts/filter', 'operator');
    endwhile;
  } else {
    $response = '';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_operator', 'filter_operator');
add_action('wp_ajax_nopriv_filter_operator', 'filter_operator');


// Operator page filter territory Ajax
function filter_territory()
{
  $state = $_POST['state'];
  $msa = $_POST['msa'];

  $ajaxposts = new WP_Query([
    'post_type'  => 'operator',
    'order'    => 'ASC',
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

  ]);
  $response = '';

  if ($ajaxposts->have_posts()) {
    while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
      $response .= get_template_part('parts/filter', 'territory');
    endwhile;
  } else {
    $response = '';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_territory', 'filter_territory');
add_action('wp_ajax_nopriv_filter_territory', 'filter_territory');
