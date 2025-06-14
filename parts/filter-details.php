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

$currentUrl = get_site_url() . "/operator-pages/?state=" . $state . "&msa=" . $msa . "&territory=" . $territory . "&status=related"

?>
<style>
     .about p,
     .about li {
          line-height: 1rem;
          font-size: 14px;
          color: #000;
     }

     .about p:last-child {
          margin: 0;
     }
</style>
<div class="large-12 cell nopad">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <?php if (have_rows('msa')) : ?>
                    <?php while (have_rows('msa')) : the_row(); ?>
                         <?php if (have_rows('territory')) : ?>
                              <?php while (have_rows('territory')) : the_row(); ?>

                                   <?php if (get_sub_field('territory_name') == $territory) : ?>
                                        <?php $territoryName = get_sub_field('territory_name') ?>
                                        <!--DETAILS -->

                                        <?php $count = count(get_sub_field('coverslider_images')) ?>


                                        <?php if (have_rows('coverslider_images')) : ?>
                                             <?php if ($count == 1) : ?>
                                                  <div class="singleCover">
                                                  <?php else : ?>

                                                       <div class="owl-carousel owl-theme" id="cover">
                                                       <? endif; ?>
                                                       <?php while (have_rows('coverslider_images')) : the_row(); ?>
                                                            <?php $SlideImage = get_sub_field('slider_image'); ?>
                                                            <div class="">
                                                                 <span class="sliderCaption"><?php echo $SlideImage['caption']; ?></span>
                                                                 <img src="<?php echo esc_url($SlideImage['url']); ?>" alt="">
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
                                                            <div class="large-8 medium-7 cell" style="padding-right:0" ;>
                                                                 <?php if (get_sub_field('active')) : ?>
                                                                      <span class="licensed"><span class="tooltippy" data-text="<?php the_sub_field('active_badge_tooltip') ?>"><img width="40" alt="Licensed" src="<?php echo get_template_directory_uri() . '/assets/images/licensed.png' ?>"></span></span>
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
                                                                      <li><?php if (get_sub_field("map_link")): ?><a href="<?php echo the_sub_field("map_link") ?>" target="_blank">View Map</a><?php else: ?><span style="color:#dadce0">View Map</span><?php endif ?></li>
                                                                      <li><?php if (get_sub_field("facebook")): ?><a href="<?php the_sub_field("facebook") ?>" target="_blank">Facebook</a><?php else: ?><span style="color:#dadce0">Facebook</span><?php endif ?></li>
                                                                      <li><?php if (get_sub_field("instagram")): ?><a href="<?php the_sub_field("instagram") ?>" target="_blank">Instagram</a><?php else: ?><span style="color:#dadce0">Instagram</span><?php endif ?></li>
                                                                      <li><span id="sharelink" data-url="<?php echo $currentUrl; ?>"><i class="fa-solid fa-link"></i> <span id="shareText"><span>Copy </span>Link</span></span></li>

                                                                 </ul>
                                                                 <!-- End Links  -->
                                                            </div>
                                                            <!-- Screenshot -->
                                                            <div class="large-4 medium-5 cell text-right hide-for-small-only" style="position: relative;">

                                                                 <img class="screenshot phoneframe" width="40" alt="Licensed" src="<?php echo get_template_directory_uri() . '/assets/images/phoneframeshadow.png' ?>">
                                                                 <img class=" screenshot" src="<?php the_sub_field('screenshot_image'); ?>">

                                                            </div>
                                                            <!-- End Screenshot -->
                                                            <!-- Main Details -->
                                                            <div class="large-9 medium-9 cell padR-0 pd-t-0 infoblock">
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
                                                                 <span class="cham">
                                                                      <a href=" <?php the_sub_field('chamber_of_commerce_url'); ?>" target="_blank"><?php the_sub_field('chamber_of_commerce'); ?></a>
                                                                      <?php if (get_sub_field('member_numbers')) : ?>
                                                                           <span>(<em><?php number_format(the_sub_field('member_numbers')); ?> members</em>)</span>
                                                                      <?php endif; ?>
                                                                 </span>
                                                                 <?php if (get_sub_field('chamber_of_commerce2')) : ?>
                                                                      <span class="chahamber2 cham">
                                                                           <a href="<?php the_sub_field('chamber_of_commerce_url2'); ?>" target="_blank"><?php the_sub_field('chamber_of_commerce2'); ?></a>
                                                                      </span>
                                                                      <span>
                                                                           <?php if (get_sub_field('member_numbers2')) : ?>
                                                                                (<em?><?php number_format(the_sub_field('member_numbers2')); ?> members</em>)
                                                                                <?php endif; ?>
                                                                      </span>
                                                                 <?php endif; ?>
                                                                 <?php if (get_sub_field('chamber_of_commerce3')) : ?>
                                                                      <span class="chahamber2 cham">
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
                                                            <?php if (get_sub_field('about_text')) : ?>
                                                                 <div class="large-12 cell pubs" style="padding-bottom:0;">
                                                                      <hr />
                                                                      <h5>About</h5>
                                                                      <div class="about">
                                                                           <?php the_sub_field('about_text'); ?>
                                                                      </div>
                                                                      <hr class="show-for-small-only" style="margin-top:15px" />
                                                                 </div>
                                                            <?php endif; ?>

                                                            <!-- Publishers -->
                                                            <div class="large-12 cell pubs hide-for-small-only">
                                                                 <hr />
                                                                 <?php if (have_rows('publishers')) : ?>
                                                                      <h5>Publishers</h5>
                                                                      <div class="publisher" id="publishers">
                                                                           <?php while (have_rows('publishers')) : the_row(); ?>
                                                                                <?php $publisher = get_sub_field('publisher'); ?>
                                                                                <span class="tooltippy" data-text="<?php echo str_replace('-aspect-ratio-100-100', '', $publisher['title']); ?>"><img src="<?php echo esc_url($publisher['url']); ?>"></span>
                                                                           <?php endwhile; ?>
                                                                      </div>
                                                                 <?php endif; ?>
                                                            </div>
                                                            <!-- End Publishers -->
                                                            <!-- mobile only -->
                                                            <div class="large-12 cell mobilePreview show-for-small-only">
                                                                 <!-- <h5>Mobile Preview</h5> -->
                                                                 <div class="phoneContainer text-center">
                                                                      <img class="screen" src="<?php the_sub_field('screenshot_image'); ?>">
                                                                      <img class="frame" alt="Licensed" src="<?php echo get_template_directory_uri() . '/assets/images/phoneframeshadow.png' ?>">
                                                                      <div class="downloadBox"><a href="https://newsie.page.link/sQZE" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/downloads.png">Download Newsie</a></div>
                                                                 </div>
                                                            </div>
                                                            <!-- Publishers -->
                                                            <div class="large-12 cell mobilePreview show-for-small-only pubs">
                                                                 <hr />
                                                                 <?php if (have_rows('publishers')) : ?>
                                                                      <h5>Publishers</h5>
                                                                      <div class="publisher" id="publishers">
                                                                           <?php while (have_rows('publishers')) : the_row(); ?>
                                                                                <?php $publisher = get_sub_field('publisher'); ?>
                                                                                <span class="tooltippy" data-text="<?php echo str_replace('-aspect-ratio-100-100', '', $publisher['title']); ?>"><img src="<?php echo esc_url($publisher['url']); ?>"></span>
                                                                           <?php endwhile; ?>
                                                                      </div>
                                                                 <?php endif; ?>
                                                            </div>
                                                            <!-- End Publishers -->
                                                            <!-- mobile only -->
                                                       </div>
                                                  </div>
                                                  <?php if (get_sub_field('active')) : ?>


                                                  <?php else : ?>
                                                       <div class="operatorCTA">
                                                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/newsie-icon-sm.png">Interested in being the <a href="https://localnewsie.com/local-newsie-program">Local Newsie</a> for <?php echo $territoryName ?>? <a href="https://localnewsie.com/local-newsie-application">Apply now!</a></div>
                                                       </div>
                                                  <?php endif; ?>
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
          $('body').removeClass('not-rendered');
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

          let shareBtn = document.getElementById("sharelink");
          let shareText = document.getElementById("shareText");
          let textToCopy = shareBtn.dataset.url

          textToCopy = textToCopy.replace(/ /g, "%20");

          shareBtn.addEventListener("click", copyText);


          function copyText(urlLink) {
               navigator.clipboard.writeText(textToCopy);
               if ($(window).width() > 767) {
                    shareText.innerHTML = "Link Copied";
               } else {
                    shareText.innerHTML = "Copied";
               }

          }

     });
</script>