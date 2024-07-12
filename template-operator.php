 -<?php
     /*
Template Name: Operator Page
*/

     get_header(); ?>

 <div class="container">
      <section class="hero grid-container">
           <div class="grid-x grid-padding-x align-center">
                <div class="cell large-9 whiteBG2 faqPage">
                     <div class="grid-x grid-padding-x align-center">
                          <div class="large-10 cell top-title">
                               <h1>Operators Pages</h1>
                          </div>
                          <div class="large-12 cell operatorContainer" style="margin-top:30px;">

                               <!-- content -->
                               <div class="grid-x grid-padding-x grid-padding-y align-center">
                                    <div class="large-4 cell operator">
                                         <!-- <h2>Do you have questions</h2>
                                        Let us try to answer some. -->

                                         <?php
                                             query_posts(array(
                                                  'post_type'  => 'operator',
                                                  'order'    => 'ASC'
                                             ));
                                             ?>
                                         <select id="state" name="state" autocomplete="off">
                                              <option value="x">Select a state</option>
                                              <?php
                                                  if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                        <option value="<?php the_field('state_code'); ?>"><?php the_title(); ?></option>

                                                   <?php endwhile ?>
                                              <?php endif ?>
                                         </select>
                                         <!-- <div id="operator-list" class="operator-list">
                                         </div>
                                         <div id="territory-list" class="territory-list">
                                         </div> -->

                                    </div>
                                    <div id="operator-list" class="large-4 cell operator-list">
                                         <select>
                                              <option></option>
                                         </select>
                                    </div>
                                    <div id="territory-list" class="large-4 cell territory-list">
                                         <select>
                                              <option></option>
                                         </select>
                                    </div>
                               </div>
                               <!-- end content -->

                          </div>
                     </div>
                </div>
           </div>
      </section>
 </div><!-- end #container -->
 <script>
      // Select bos action ++++++++++++

      jQuery('#state').on('change', function() {
           jQuery(".fa-spin").addClass('is-active');

           jQuery.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'html',
                data: {
                     action: 'filter_operator',
                     category: jQuery(this).val(),
                     //  test: "furious"
                },
                success: function(res) {
                     jQuery(".fa-spin").removeClass('is-active');
                     jQuery('.operator-list').html(res);
                     jQuery('.accordion').foundation();
                }
           })
      });
 </script>
 <?php get_footer(); ?>