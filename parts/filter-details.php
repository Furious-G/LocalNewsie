<?php

$state = $_POST['state_code'];
// $territory = $_POST['territory'];
$msa = $_POST['msa'];
$territory = stripslashes_deep($_POST['territory']);
?>


<?php
query_posts(array(
     'post_type'  => 'operator',
     'order'    => 'ASC',
     'posts_per_page' => -1,
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

));

?>

<div class="large-12 cell nopad">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <?php if (have_rows('msa')) : ?>
                    <?php while (have_rows('msa')) : the_row(); ?>
                         <?php if (have_rows('territory')) : ?>
                              <?php while (have_rows('territory')) : the_row(); ?>

                                   <?php if (get_sub_field('territory_name') == $territory) : ?>
                                        <!--DETAILS -->

                                        <?php $count = count(get_sub_field('coverslider_images')) ?>


                                        <?php if (have_rows('coverslider_images')) : ?>
                                             <?php if ($count == 1) : ?>
                                                  <div class="singleCover">
                                                  <?php else : ?>
                                                       <div class="owl-carousel owl-theme" id="cover">
                                                       <? endif; ?>
                                                       <?php while (have_rows('coverslider_images')) : the_row(); ?>
                                                            <div class="">
                                                                 <img src="<?php the_sub_field('slider_image'); ?>" alt="">
                                                            </div>
                                                       <?php endwhile; ?>
                                                       </div>
                                                  <?php else : ?>
                                                       <div class="placeHolder">
                                                            <h3><?php the_sub_field('territory_name'); ?></h3>
                                                       </div>
                                                  <?php endif; ?>

                                                  <div class="grid-container terDetails">
                                                       <div class="grid-x grid-padding-x grid-padding-y">
                                                            <div class="large-8 cell" style="padding-right:0" ;>
                                                                 <?php if (get_sub_field('active')) : ?>
                                                                      <span class="licensed"><span hover-tooltip="<?php the_sub_field('active_badge_tooltip') ?>"><img width="40" alt="Licensed" src="<?php echo get_template_directory_uri() . '/assets/images/licensed.png' ?>"></span></span>
                                                                 <?php endif; ?>
                                                                 <h5>
                                                                      TERRITORY <?php the_sub_field('territory_id'); ?>
                                                                      <?php if (have_rows('related_instances')) : ?>
                                                                           <span>
                                                                                <?php while (have_rows('related_instances')) : the_row(); ?>
                                                                                     <?php
                                                                                     $related_link = get_sub_field('territory_link');
                                                                                     $related_url =  get_site_url() . '/operator-pages/?' . $related_link . "&status=related";
                                                                                     ?>
                                                                                     <span style="color: #dadce0; font-weight:normal">|</span> <a href="<?php echo $related_url; ?>"><?php the_sub_field('instance_id'); ?></a>



                                                                                <?php endwhile; ?>
                                                                           </span>
                                                                      <?php endif; ?>
                                                                 </h5>
                                                                 <h1><?php the_sub_field('territory_name'); ?></h1>
                                                                 <!-- Links -->
                                                                 <ul class="links">
                                                                      <li><a href="<?php echo the_sub_field("map_link") ?>" target="_blank">View Map</a></li>
                                                                      <li><a href="<?php the_sub_field("facebook") ?>" target="_blank">Facebook</a></li>
                                                                      <li><a href="<?php the_sub_field("instagram") ?>" target="_blank">Instagram</a></li>

                                                                 </ul>
                                                                 <!-- End Links  -->
                                                            </div>
                                                            <!-- Screenshot -->
                                                            <div class="large-4 cell text-right" style="position: relative;">

                                                                 <img class="screenshot phoneframe" width="40" alt="Licensed" src="<?php echo get_template_directory_uri() . '/assets/images/phoneframeshadow.png' ?>">
                                                                 <img class=" screenshot" src="<?php the_sub_field('screenshot_image'); ?>">
                                                            </div>
                                                            <!-- End Screenshot -->
                                                            <!-- Main Details -->
                                                            <div class="large-9 cell padR-0 pd-t-0">
                                                                 <div class="infoContainer">
                                                                      <div class="population info">
                                                                           Population<br />
                                                                           <span><?php the_sub_field('population'); ?></span>
                                                                      </div>
                                                                      <div class="density info">
                                                                           Density<br />
                                                                           <span><?php the_sub_field('population_density'); ?></span>
                                                                      </div>
                                                                      <div class="median info">
                                                                           Median Home Value / Income<br />
                                                                           <?php if (get_sub_field('median_home_value')) : ?>
                                                                                <span>$<?php the_sub_field('median_home_value'); ?></span>
                                                                           <?php endif; ?>
                                                                           <span>/</span>
                                                                           <?php if (get_sub_field('median_income')) : ?>
                                                                                <span>$<?php the_sub_field('median_income'); ?></span>
                                                                           <?php endif ?>
                                                                      </div>
                                                                      <div class="msa info">
                                                                           MSA<br />
                                                                           <span><?php echo $msa; ?></span>
                                                                      </div>
                                                                      <div class="zips info">
                                                                           Zip Codes<br />
                                                                           <span>
                                                                                <?php the_sub_field('zip_codes'); ?>
                                                                           </span>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                            <!-- End Main Details -->
                                                            <!-- Chamber -->
                                                            <div class="cell large-8 info2" style="padding-top:0; padding-bottom:0">
                                                                 CHAMBER:
                                                                 <span>
                                                                      <a href="<?php the_sub_field('chamber_of_commerce_url'); ?>" target="_blank"><?php the_sub_field('chamber_of_commerce'); ?></a>
                                                                      <?php if (get_sub_field('member_numbers')) : ?>
                                                                           <span>(<em><?php number_format(the_sub_field('member_numbers')); ?> members</em>)</span>
                                                                      <?php endif; ?>
                                                                 </span>
                                                                 <?php if (get_sub_field('chamber_of_commerce2')) : ?>
                                                                      <br />
                                                                      <span class="chahamber2">
                                                                           <a href="<?php the_sub_field('chamber_of_commerce_url2'); ?>" target="_blank"><?php the_sub_field('chamber_of_commerce2'); ?></a>
                                                                      </span>
                                                                      <span>
                                                                           <?php if (get_sub_field('member_numbers2')) : ?>
                                                                                (<em?><?php number_format(the_sub_field('member_numbers2')); ?> members</em>)
                                                                                <?php endif; ?>
                                                                      </span>
                                                                 <?php endif; ?>
                                                                 <?php if (get_sub_field('chamber_of_commerce3')) : ?>
                                                                      <br />
                                                                      <span class="chahamber2">
                                                                           <a href="<?php the_sub_field('chamber_of_commerce_url3'); ?>" target="_blank"><?php the_sub_field('chamber_of_commerce3'); ?></a>
                                                                      </span>
                                                                      <span>
                                                                           <?php if (get_sub_field('member_numbers3')) : ?>
                                                                                (<em?><?php number_format(the_sub_field('member_numbers3')); ?> members</em>)
                                                                                <?php endif; ?>
                                                                      </span>
                                                                 <?php endif; ?>
                                                            </div>
                                                            <!-- End Chamber -->
                                                            <!-- Publishers -->
                                                            <div class="large-12 cell pubs">
                                                                 <hr />
                                                                 <?php if (have_rows('publishers')) : ?>
                                                                      <h5>Publishers</h5>
                                                                      <div class="publisher" id="publishers">
                                                                           <?php while (have_rows('publishers')) : the_row(); ?>
                                                                                <?php $publisher = get_sub_field('publisher'); ?>
                                                                                <span hover-tooltip="<?php echo str_replace('-aspect-ratio-100-100', '', $publisher['title']); ?>"><img src="<?php echo esc_url($publisher['url']); ?>"></span>
                                                                           <?php endwhile; ?>
                                                                      </div>
                                                                 <?php endif; ?>
                                                            </div>
                                                            <!-- End Publishers -->
                                                       </div>
                                                  </div>
                                                  <!-- End DETAILS -->
                                             <?php endif; ?>
                                        <?php endwhile; ?>
                                   <?php endif; ?>

                              <?php endwhile; ?>
                         <?php endif; ?>
                    <?php endwhile; ?>
               <?php endif; ?>
                                                  </div>
</div>
<!-- end content -->





<script>
     // Select bos action ++++++++++++
     jQuery(document).ready(function($) {
          $('#cover').owlCarousel({
               loop: true,
               nav: true,
               dots: false,
               autoplay: true,
               autoplayTimeout: 4400,
               smartSpeed: 1500,
               items: 1,
               navText: ["<i class='fa-solid fa-chevrons-left'></i>", "<i class='fa-solid fa-chevrons-right'></i>"]
          });



     });
</script>