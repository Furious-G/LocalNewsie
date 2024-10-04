<?php
/*
Template Name: Operator Page
*/


get_header();

?>

<div class="container">
     <section class="grid-container operator">
          <div class="grid-x grid-padding-x align-center">
               <div class="cell large-9 changelayout">


                    <div class="selectList">
                         <div>
                              <?php
                              query_posts(array(
                                   'post_type'  => 'operator',
                                   'orderby' => 'title',
                                   'order' => 'DESC'
                              ));
                              ?>
                              <select id="state" name="state" autocomplete="off">
                                   <option value="x">Select a state</option>
                                   <?php echo do_shortcode('[operator_titles]'); ?>
                              </select>

                         </div>

                         <!-- ajax show MSAs -->
                         <div id="operator-list" class="operator-list">
                              <select>
                                   <option></option>
                              </select>
                         </div>
                         <!-- ajax show territorries -->
                         <div id="territory-list" class="territory-list">
                              <select>
                                   <option></option>
                              </select>
                         </div>
                    </div>
                    <div class="cell large-12 whiteBG mg-t-20">
                         <div class="grid-x grid-padding-x align-center">
                              <div id="showDetails" class="large-12 cell showDetails">
                                   <div class="tempHolder">
                                        <div class="loader2"><img src="/wp-content/uploads/Emote-001.png"></div>
                                   </div>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
</div><!-- end #container -->

<script>
     // Select bos action ++++++++++++
     jQuery(document).ready(function($) {
          url = new URL(window.location.href);
          let coverImage
          if (window.innerWidth < 768) {
               coverImage = "<img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tempholder2mobile.png' />";
          } else {
               coverImage = "<img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tempholder2.png' />";
          }
          $("body").addClass('not-rendered');
          // alert(coverImage);
          // check to see if querystring exists and if so go to the details page
          if (url.searchParams.has('state')) {
               let state = (new URL(location.href)).searchParams.get('state');
               let msa = (new URL(location.href)).searchParams.get('msa');
               let territory = (new URL(location.href)).searchParams.get('territory');
               let nonce = '<?php echo wp_create_nonce("filter_nonce"); ?>';
               // $(".tempHolder").html('<i class="fas fa-sync fa-spin"></i>');

               // $('#showDetails').html('<i class="fa-solid fa-sync fa-spin"></i>');
               setTimeout(() => {
                    $.ajax({
                         url: '<?php echo admin_url("admin-ajax.php"); ?>',
                         type: 'POST',
                         data: {
                              action: 'filter_details',
                              state_code: state,
                              msa: msa,
                              territory: territory,
                              nonce: nonce
                         },
                         success: function(res) {
                              $('#showDetails').html(res);
                              window.history.replaceState("object or string", "Title", url);

                         },
                         error: function(xhr, status, error) {
                              console.error('AJAX Error: ' + status + error);
                         }
                    });
               }, 500);
          } else {
               setTimeout(() => {
                    $(".tempHolder").html(coverImage);
               }, 500);

          }

          // Ajax to load the MSA select box

          $('#state').on('change', function() {



               $.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url("admin-ajax.php"); ?>',
                    dataType: 'html',
                    data: {
                         action: 'filter_operator',
                         state: jQuery(this).val(),
                    },
                    success: function(res) {
                         $('.operator-list').html(res);
                    }
               })
               // alert("changed");
               document.getElementById("territory").options.length = 0;

          });


          //Check to see if url is related, if so automatically update the state dropdown and trigger it
          function getQueryState(name) {
               let stateParams = new URLSearchParams(window.location.search);
               return stateParams.get(name);
          }
          let statusValue = getQueryState('status');
          let stateValue = getQueryState('state');

          if (statusValue == 'related') {
               // alert('related state changed')
               $('#state').val(stateValue).trigger('change');
          }
     });
</script>
<?php get_footer(); ?>