<?php
/*
Template Name: Spec Builder
*/

get_header(); ?>



<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 onboardingPage">

                <div class="grid-x grid-padding-x grid-padding-y align-center businessForm businessList">
                    <div class="large-10 cell top-title">
                        <h1>Spec Page Builder</h1>
                    </div>

                    <div class="large-10 cell">

                        <div class="grid-x grid-padding-x grid-margin-y grid-padding-y">
                            <div class="large-12 cell subtemp">

                                Please use this form to submit businesses to your local directory. Spec pages will appear in the organizations section of your dashboard once complete. Please give support up to 72-hours to create your spec page.

                                <!-- End Select Field -->



                                <?php echo do_shortcode('[contact-form-7 id="1217" title="Onboarding_copy"]'); ?>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- end #container -->

<?php get_footer(); ?>

<script type="text/javascript">






</script>