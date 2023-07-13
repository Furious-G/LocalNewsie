<?php
/*
Template Name: Demo
*/

get_header(); ?>
<style>
/* svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 112px;
    background:transparent;
} */
</style>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 demoPage">
                <div class="grid-x grid-padding-x grid-padding-y align-center">
                    <div class="large-10 cell top-title">
                        <h1>Features</h1>
                    </div>
                </div>
                    <div class="grid-container">
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x grid-margin-x align-center align-middle democontainer first">
                            <div class="cell medium-5 text-right mleft">
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/demo-home.png" class="demoPhone">
                            </div>
                            <div class="cell medium-5 text-left mright">
                                <h5>An App Built for<br>Everyone</h5>
                                Meet “newsie” the app that delivers curated local news from trusted community sources.
                            </div>
                        </div>
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center align-middle democontainer bg2">
                            <div class="cell medium-5 text-left mleft small-order-2 medium-order-1">
                                <h5>Local Channel</h5>The local channel provides up to the minute local curated news and information. The local stream provides a way for local and metro news sources to expand their distribution while providing users a one stop shop for news from a variety of recognized sources. 
                            </div>
                            <div class="cell medium-5 text-left mright small-order-1 medium-order-2">
                                <div class="localScroll show-for-large"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/localScroll.jpg"></div>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/demo-local.png" class="demoPhone">
                            </div>
                        </div>
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x grid-padding-y grid-margin-x align-center align-middle democontainer bg3">
                            <div class="cell medium-5 text-right mleft">
                            <div class="channelScroll show-for-large"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/channelScroll.jpg"></div>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/demo-guide.png" class="demoPhone">
                            </div>
                            <div class="cell medium-5 text-left mright">
                                <h5>Special Interest Channels</h5>Special interest channels are streams of curated news and blog posts about a variety of special interests, such as dining and pets. These channels stream news feeds from both national and local publishers. More channels will be available as Newsie evolves!
                            </div>
                        </div>
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center align-middle democontainer bg4">
                            <div class="cell medium-5 text-left mleft small-order-2 medium-order-1">
                                <h5>Community Events Calendar</h5>The in-app events calendar features all the latest events published by local businesses and groups who’ve signed up to the app, as well as approved events posted by users. Newsie provides a one stop location for local users to find local activities for themselves and their families. 
                            </div>
                            <div class="cell medium-5 text-left mright small-order-1 medium-order-2" >
                            <div class="eventsScroll show-for-large"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/eventsScroll.jpg"></div>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/demo-events.png" class="demoPhone">
                            </div>
                        </div>
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x  grid-padding-y grid-margin-x align-center align-middle democontainer bg5">
                            <div class="cell medium-5 text-right mleft">
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/demo-directory.png" class="demoPhone">
                            </div>
                            <div class="cell medium-5 text-left mright">
                                <h5>Local Directory</h5>The local directory highlights businesses by category, as well as groups including community groups, sports teams and more! The directory is where users can find out all about what they do, including where they're located and available offers. Users can add businesses and groups to their favorites too!
                            </div>
                        </div>
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center align-middle democontainer bg6">
                            <div class="cell medium-4 text-left mleft small-order-2 medium-order-1">
                                <h5>Directory Page</h5>Participating organizations create a unique business page on the Newsie app. The business page provides users with easy access to contact information, description of goods and services provided by the organization, offers and deals when applicable, story or announcement posts, reviews, and alerts.
                            </div>
                            <div class="cell medium-5 text-left mright small-order-1 medium-order-2">
                            <div class="listingScroll show-for-large"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/listingScroll.jpg"></div>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/demo-listing.png" class="demoPhone">
                            </div>
                        </div>
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x grid-padding-y grid-margin-x align-center align-middle democontainer bg7">
                            <div class="cell medium-5 text-right mleft">
                                <div class="storyScroll show-for-large"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/storyScroll.jpg"></div>
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/demo-story.png" class="demoPhone">
                            </div>
                            <div class="cell medium-5 text-left mright">
                                <h5>Featured Stories</h5>Local Newsies can publish content to their local channel and feature organizations that appear in the directory. These stories include observations on new businesses opening in the area, features on local community members, and more.
                            </div>
                        </div>
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center align-middle democontainer bg8">
                            <div class="cell medium-5 text-left mleft small-order-2 medium-order-1">
                                <h5>Local Newsie</h5>A local Newsie is an affiliate who licenses the exclusive commercial rights to the Newsie platform within a designated territory. Their role is to provide access to the platform to local organizations while also sharing their own visual observations about events and activities within the territory.
                            </div>
                            <div class="cell medium-5 text-left mright small-order-1 medium-order-2">
                                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/demo-newsie.png" class="demoPhone">
                            </div>
                        </div>
                        <!-- ######################## -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center democontainer pd-t-80 pd-b-60">
                            <div class="cell large-12 text-center mleft">
                                <h5>Explore Newsie</h5>
                            </div>
                            <div class="cell small-6 medium-2">
                                <a href="https://apps.apple.com/us/app/newsie-local-news/id1471222598" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/apple.png" class="">
                                </a>
                            </div>
                            <div class="cell small-6 medium-2">
                                <a href="https://play.google.com/store/apps/details?id=com.newsiemobileapp" target="_blank"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/demo/google.png" class="">
                                </a>
                            </div>
                        </div>
                        <!-- ######################## -->
                    </div>

            </div>
        </div>
    </section>
    <div class="content">
    </div> <!-- end #content -->
</div><!-- end #container -->

<script>

// jQuery('.localScroll').scrollTop(jQuery('.localScroll')[0].sHeight);

;

jQuery(window).scroll(function() {
   var hT = jQuery('.localScroll').offset().top,
       hH = jQuery('.localScroll').outerHeight(),
       wH = jQuery(window).height(),
       wS = jQuery(this).scrollTop();
    console.log((hT-wH) , wS);
   if (wS > (hT+hH-wH)){

    
    jQuery(".localScroll").animate({ scrollTop: jQuery('.localScroll').prop("scrollHeight")}, 20000)


    jQuery(".localScroll").hover(function(){

        jQuery(".localScroll").stop();
        jQuery(window).off("scroll");
    });

   }
});

    


</script>
<?php get_footer(); ?>