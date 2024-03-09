<?php the_title(); ?>

<div class="accord">
     <ul class="accordion" data-accordion>
          <?php if (have_rows('area')) : ?>
               <?php while (have_rows('area')) : the_row(); ?>
                    <li class="accordion-item" data-accordion-item>
                         <a href="#" class="accordion-title"><?php the_sub_field('area_name'); ?></a>
                         <div class="accordion-content" data-tab-content>

                              <?php if (get_sub_field('status')) : ?>
                                   Live <i class="fa-regular fa-signal-stream" style="font-size: 1.4rem; vertical-align: middle;"></i>
                              <?php else : ?>
                                   Not live <i class="fa-regular fa-signal-stream-slash" style="font-size: 1.4rem; vertical-align: middle;"></i>
                              <?php endif ?>
                              <br />
                              <?php
                              $zips = array();
                              if (have_rows('zip_codes')) {
                                   while (have_rows('zip_codes')) {
                                        the_row();
                                        $zips[] = get_sub_field('zip_code');
                                   }
                              }
                              echo implode(', ', $zips);
                              ?>
                              <br />
                              <?php the_sub_field('metro'); ?>
                              <br />
                              <?php the_sub_field('chamber_of_commerce'); ?>
                              <br />
                              <a href=" <?php the_sub_field('facebook'); ?>" target="_blank"> <?php the_sub_field('facebook'); ?></a>
                              <br />
                              <a href="<?php the_sub_field('instagram'); ?>" target="_blank"> <?php the_sub_field('instagram'); ?></a>
                              <br />
                              <?php the_sub_field('operator'); ?>
                         </div>
                    </li>
               <?php endwhile; ?>
          <?php endif; ?>
     </ul>
</div>