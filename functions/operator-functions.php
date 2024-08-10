<?php

// filter for msa field query
function msa_where($where)
{

     $where = str_replace("meta_key = 'msa_$", "meta_key LIKE 'msa_%", $where);

     return $where;
}
add_filter('posts_where', 'msa_where');


// filter for msa field query
function territory_where($where)
{

     $where = str_replace("meta_key = 'territory_$", "meta_key LIKE 'msa_%_territory_%_territory_id", $where);

     return $where;
}
add_filter('posts_where', 'territory_where');


// Filter MSAs to state selectd
function filter_operator()
{
     $state = $_POST['state'];

     $ajaxposts = new WP_Query([
          'post_type'  => 'operator',
          'order'    => 'ASC',
          'meta_key'      => 'state_code',
          'meta_value'    => $state

     ]);
     $response = '';

     if ($ajaxposts->have_posts()) {
          while ($ajaxposts->have_posts()) : $ajaxposts->the_post();
               $response .= get_template_part('parts/filter', 'operator');
          endwhile;
     } else {
          $response = '<select><option></option></select>';
     }

     echo $response;
     exit;
}
add_action('wp_ajax_filter_operator', 'filter_operator');
add_action('wp_ajax_nopriv_filter_operator', 'filter_operator');


// Filter territoris from MSA selected
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



// Get the territory
function filter_details_callback()
{
     check_ajax_referer('filter_nonce', 'nonce');

     if (isset($_POST['state_code'])) {
          global $state_code;
          // $state_code = sanitize_text_field($_POST['state_code']);

          ob_start();
          get_template_part('parts/filter', 'details');
          $response = ob_get_clean();

          echo $response;
     } else {
          echo 'No state code provided.';
     }

     wp_die(); // Required to terminate immediately and return a proper response
}

add_action('wp_ajax_filter_details', 'filter_details_callback');
add_action('wp_ajax_nopriv_filter_details', 'filter_details_callback');
