<?php
/*
Template Name: Payment
*/



get_header(); ?>

<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 paymentPage">
                <div class="grid-x grid-padding-x align-center">
                    <div class="large-10 cell top-title">
                        <h1>Payments</h1>
                    </div>
                    <div class="large-10 cell ">
                        
                        <!-- content -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center">
                            <div class="large-12 cell ">
                                <div class="pd-t-20">
                                <?php echo do_shortcode('[fullstripe_form name="payment" type="inline_subscription"]'); ?>
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
<?php get_footer(); ?>

<style>
.wpfs-w-60{
  max-width: 100% !important;
}
</style>