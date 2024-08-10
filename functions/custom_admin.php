<?php

// add columns for MSA in operator pages

// Hook to add a custom column specifically for the "operator" custom post type
add_filter('manage_operator_posts_columns', 'add_repeater_count_column');

function add_repeater_count_column($columns)
{
     // Create an array to hold the new order of columns
     $new_columns = array();

     // Iterate over the original columns
     foreach ($columns as $key => $value) {
          // Add the title column
          if ($key == 'title') {
               $new_columns[$key] = $value;
               // Add the repeater count column right after the title column
               $new_columns['repeater_count'] = 'MSAs';
          } else {
               // Add the other original columns
               $new_columns[$key] = $value;
          }
     }

     return $new_columns;
}

// Hook to populate the custom column with the repeater count for the "operator" custom post type
add_action('manage_operator_posts_custom_column', 'populate_repeater_count_column', 10, 2);

function populate_repeater_count_column($column, $post_id)
{
     if ($column == 'repeater_count') {
          // Get the repeater field value
          $repeater_field = get_field('msa', $post_id);

          // Check if the repeater field is an array and count the number of rows
          $repeater_count = is_array($repeater_field) ? count($repeater_field) : 0;

          echo $repeater_count;
     }
}



// Make the custom column sortable for the "operator" custom post type
add_filter('manage_edit-operator_sortable_columns', 'make_repeater_count_column_sortable');

function make_repeater_count_column_sortable($columns)
{
     $columns['repeater_count'] = 'repeater_count';
     return $columns;
}

// Sort the "operator" posts by repeater count
add_action('pre_get_posts', 'sort_posts_by_repeater_count');

function sort_posts_by_repeater_count($query)
{
     if (!is_admin() || !$query->is_main_query()) {
          return;
     }

     // Check if the query is for the "operator" custom post type and the orderby is set to repeater_count
     $post_type = $query->get('post_type');
     $orderby = $query->get('orderby');

     if ('operator' === $post_type && 'repeater_count' === $orderby) {
          $query->set('meta_key', 'msa');
          $query->set('orderby', 'meta_value_num');
     }
}



// ADMIN STYLES
function admin_seperators()
{
     echo '<style type="text/css">
     
#adminPubImages img {
     border: solid 1px;
     min-width: 50px !important;
     height: 50px;
}
#adminSliderImages img {
     border: solid 1px;
     min-width: 100px !important;
     height: 100px;
}

#long, #lat{display:none}


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
