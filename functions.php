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

// Custom admin functions
require_once(get_template_directory() . '/functions/custom_admin.php');

// Ajax operator page functions
require_once(get_template_directory() . '/functions/operator-functions.php');




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

// +++++Operator stuff+++++++++

// filter for sub field query
// function my_posts_where($where)
// {

//   $where = str_replace("meta_key = 'msa_$", "meta_key LIKE 'msa_%", $where);

//   return $where;
// }

// add_filter('posts_where', 'my_posts_where');







// Operator page List Ajax
// function filter_operator()
// {
//   $catSlug = $_POST['category'];

//   $ajaxposts = new WP_Query([
//     'post_type'  => 'operator',
//     'order'    => 'ASC',
//     'meta_key'      => 'state_code',
//     'meta_value'    => $catSlug

//   ]);
//   $response = '';

//   if ($ajaxposts->have_posts()) {
//     while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
//       $response .= get_template_part('parts/filter', 'operator');
//     endwhile;
//   } else {
//     $response = '';
//   }

//   echo $response;
//   exit;
// }
// add_action('wp_ajax_filter_operator', 'filter_operator');
// add_action('wp_ajax_nopriv_filter_operator', 'filter_operator');


// // Operator page filter territory Ajax
// function filter_territory()
// {
//   $state = $_POST['state'];
//   $msa = $_POST['msa'];

//   $ajaxposts = new WP_Query([
//     'post_type'  => 'operator',
//     'order'    => 'ASC',
//     'meta_query'    => array(
//       'relation'      => 'AND',
//       array(
//         'key'       => 'msa_$_msa_name',
//         'compare'   => '=',
//         'value'     => $msa,
//       ),
//       array(
//         'key'       => 'state_code',
//         'compare'   => '=',
//         'value'     => $state,
//       )
//     )

//   ]);
//   $response = '';

//   if ($ajaxposts->have_posts()) {
//     while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
//       $response .= get_template_part('parts/filter', 'territory');
//     endwhile;
//   } else {
//     $response = '';
//   }

//   echo $response;
//   exit;
// }
// add_action('wp_ajax_filter_territory', 'filter_territory');
// add_action('wp_ajax_nopriv_filter_territory', 'filter_territory');


function rdsn_acf_repeater_collapse()
{
?>
  <style id="rdsn-acf-repeater-collapse">
    .acf-repeater .acf-table {
      display: none;
    }
  </style>
  <script type="text/javascript">
    jQuery(function($) {
      $('.acf-repeater .acf-row').addClass('-collapsed');
      $('#rdsn-acf-repeater-collapse').detach();
    });
  </script>
<?php
}
add_action('acf/input/admin_head', 'rdsn_acf_repeater_collapse');

// Query states and show territories 
function display_operator_titles_with_territory_count()
{
  $args = array(
    'post_type' => 'operator',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
  );

  $operator_query = new WP_Query($args);
  $output = '';

  if ($operator_query->have_posts()) {
    while ($operator_query->have_posts()) {
      $operator_query->the_post();

      $msa = get_field('msa');
      $territory_count = 0;

      if ($msa) {
        foreach ($msa as $item) {
          if (!empty($item['territory'])) {
            $territory_count += count($item['territory']);
          }
        }
      }
      $state_code = get_field('state_code');
      if ($territory_count > 0) {
        $output .= '<option value="' . $state_code  . '">' . get_the_title() . ' (' . $territory_count . ')</option>';
      }
    }

    wp_reset_postdata();
  } else {
    $output .= 'No operators found.';
  }

  return $output;
}

function operator_titles_shortcode()
{
  return display_operator_titles_with_territory_count();
}
add_shortcode('operator_titles', 'operator_titles_shortcode');
