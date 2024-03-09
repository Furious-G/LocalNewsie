<?php
/*
Template Name: Operator Page
*/

get_header(); ?>
<style>
     .divider {
          color: #F0552A;
          font-size: 1.2rem !important;
          margin-top: 30px;
          border-bottom: dotted;
          padding-bottom: 8px !important;
          margin-bottom: 30px;
          border-color: grey;
     }
</style>

<div class="container">
     <section class="hero grid-container">
          <div class="grid-x grid-padding-x align-center">
               <div class="cell large-9 whiteBG2 faqPage">
                    <div class="grid-x grid-padding-x align-center">
                         <div class="large-10 cell top-title">
                              <h1>Operators Pages</h1>
                         </div>
                         <div class="large-10 cell">
                              <!-- content -->
                              <div class="grid-x grid-padding-x grid-padding-y align-center">
                                   <div class="large-12 cell">
                                        <!-- <h2>Do you have questions</h2>
                                        Let us try to answer some. -->

                                        <?php
                                        query_posts(array(
                                             'post_type'  => 'operator',
                                             'order'    => 'ASC'
                                        ));
                                        ?>
                                        <select id="state" name="state">
                                             <option value="x">Select a state</option>
                                             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                       <option value="<?php the_field('state_code'); ?>"><?php the_title(); ?></option>


                                                  <?php endwhile ?>
                                             <?php endif ?>
                                        </select>
                                        <div class="operator-list">
                                             <i class="fa-solid fa-rotate-right fa-spin not-active"></i>
                                        </div>
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
     jQuery('#state').on('change', function() {
          jQuery(".fa-spin").addClass('is-active');

          jQuery.ajax({
               type: 'POST',
               url: '/wp-admin/admin-ajax.php',
               dataType: 'html',
               data: {
                    action: 'filter_operator',
                    category: jQuery(this).val()
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