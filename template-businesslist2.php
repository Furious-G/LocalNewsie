<?php
/*
Template Name: Business List 2
*/

get_header(); ?>


<!-- <?php 


  $uid = get_current_user_id();

  $user_info = get_userdata($uid);
  $ter = 'territory_'. $x .'_territories';
  $mailadresje = $user_info->territory_0_territories;
  $ters = $user_info->territory;
 
    for ($x = 0; $x <= $ters; $x++) {
        $ter = 'territory_'. $x .'_territories';
        $mailadresje = $user_info->$ter;
        echo "$mailadresje <br>";
    }
    // update_user_meta( $uid, "territory_0_territories", "Scottsdale, AZ" );
?>  -->


<?php 

// $posts = get_posts(array(
//     'posts_per_page'    => -1,
//     'post_type'         => 'onboard',
//     'post_status' => 'any'
// ));

// if( $posts ): 

//     foreach( $posts as $post ): 
        
//         setup_postdata( $post );
        
//          if( get_field('type') === "Organization" ): 

//                         for ($x = 0; $x <= $ters; $x++) {
//                             $ter = 'territory_'. $x .'_territories';
//                             $mailadresje = $user_info->$ter;
//                             echo get_field('territory');
//                         }
//         endif; 
    
//       endforeach; 
    
//       wp_reset_postdata();

// endif; 
?>

<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 onboardingPage">

                <div class="grid-x grid-padding-x grid-padding-y align-center businessForm businessList">
                    <div class="large-10 cell top-title">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="large-10 cell">
                        <?php if ( is_user_logged_in())  : ?>

                        <?php include get_template_directory() . '/parts/acct-nav.php'; ?>
                        <div class="userMenu"></div>
                        <span class="tagline"></span>
                        <div class="grid-x grid-padding-x grid-margin-y grid-padding-y">
                            <div class="large-12 cell">
   <!--                          	<ul class="tabs" data-tabs id="example-tabs">
									<li class="tabs-title is-active">
										<a href="#panel1" aria-selected="true">Organizations</a>
									</li>
								  	<li class="tabs-title tabOff">
								  		<a data-tabs-target="panel2" href="#panel2">Channel</a>
								  	</li>
								</ul> -->

									<div class="tabs-panel is-active org" style="padding:0" id="panel1">
                                         <!-- Select Field -->
                                        <?php if( have_rows('territory', 'user_' . $uid) ): ?>

                                            <select name="territory" class="org_territory terType">
                                            <option value="">Select Territory</option>
                                            <?php while( have_rows('territory', 'user_' . $uid) ): the_row(); ?>
                                                <option value="<?php the_sub_field('territories'); ?>"><?php the_sub_field('territories'); ?></option>
                                            <?php endwhile; ?>
                                            </select>

                                        <?php endif; ?>
                                        <!-- End Select Field -->                                       
		                                <div class="done">
		                                    <div class="filled perfilled"></div>
		                                </div>

		                                <div class="finished"><span class="comp perc">0</span>% complete</div>

		                                <div class="form hideForm">
		                                    <?php echo do_shortcode('[contact-form-7 id="894" title="Business List_copy"]'); ?>
                                            
		                                </div>
		                            </div>
							        <div class="tabs-panel chan" id="panel2">
                                        <div class="done">
                                            <div class="filled2 perfilled"></div>
                                        </div>
                                        <div class="finished"><span class="comp2 perc">0</span>% complete</div>
                                        <!-- Select Field -->
                                        <?php if( have_rows('territory', 'user_' . $uid) ): ?>

                                            <select name="territory" class="terType org_territory">
                                            <option value="">Select Territory</option>
                                            <?php while( have_rows('territory', 'user_' . $uid) ): the_row(); ?>
                                                <option value="<?php the_sub_field('territories'); ?>"><?php the_sub_field('territories'); ?></option>
                                            <?php endwhile; ?>
                                            </select>

                                        <?php endif; ?>
                                        <!-- End Select Field -->
                                        <div class="form hideForm">
                                            <?php echo do_shortcode('[contact-form-7 id="934" title="Onboarding_channel"]'); ?>
                                        </div>
					  				</div>

                            </div>
                        </div>
                    </div>
                    <?php  else : ?>
                    This content is for users only<br>
                    <a href="login">Login</a>
                    <div style="height:300px"></div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
</div><!-- end #container -->

<?php get_footer(); ?>

<script type="text/javascript">
    
document.addEventListener( 'wpcf7submit', function( event ) {

// ----Create Cookie to update user meta



  // var type = jQuery(this).closest(".tabs-panel").find(".type").val();
  // var terorg = jQuery(this).closest(".tabs-panel").find(".terType option:selected").index();
  // terorg = terorg - 1;
  // terg = "territories_" + terorg + "_territory";
  //       function createCookie(name,value,minutes) {
  //           if (minutes) {
  //               var date = new Date();
  //               date.setTime(date.getTime()+(minutes*60*1000));
  //               var expires = "; expires="+date.toGMTString();
  //           } else {
  //               var expires = "";
  //           }
  //           document.cookie = name+"="+value+expires+"; path=/";
  //       }

  //   createCookie("territory", terg, 1);
  //   createCookie("type", type, 1);

// ----reset form. Kind of

    jQuery(".tabs-panel").find("select").val("");
    jQuery(".tabs-panel").find(".perc").text("0");
    jQuery(".perfilled").css("width", "0%");
    jQuery(".wpcf7-submit").attr('disabled', 'disabled');
    jQuery("a.decoy").removeClass('off');
    jQuery(".wpcf7-submit").addClass('off');
    jQuery(".bname").text('');
    jQuery(".pending").addClass('showit');
    jQuery(".check").removeClass('showit');
    jQuery("input").val();
    jQuery( ".followed" ).prop( "checked", false );
    var terA = jQuery(".tabs-panel").find("select").val();
    jQuery(".tabs-panel").find("select option:contains("+ terA +")").attr("disabled","disabled");


    setTimeout(function(){
    //jQuery( ".wpcf7-response-output" ).remove();
    // jQuery("html, body").animate({ scrollTop: 0 }, "slow");
    // jQuery(".tabOff").removeClass('tabDis');
    // jQuery(".tabOff a").addClass('animate__animated animate__heartBeat animate__repeat-3');
    }, 4000);

}, false );


// ----Show message for not filling out form

jQuery( "a.decoy" ).click(function() {
  jQuery('.bubble').fadeIn('fast').delay(3000).fadeOut('slow');


});





</script>