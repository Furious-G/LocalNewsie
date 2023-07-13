<?php
/*
Template Name: Mascot single
*/

get_header(); ?>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2">
                <div class="grid-x grid-padding-x grid-padding-y align-center ">
                    <div class="large-10 cell top-title mascots">

                <a href="/mascots/" class="float-left"><i class="fa-solid fa-angle-left"></i> Back</a>
                <h3><?php the_field( 'title' ); ?></h3>
                <div class="grid-x grid-padding-x grid-padding-y grid-margin-x grid-margin-y small-up-1 medium-up-3 large-up-3 text-center">

                <?php if( have_rows('mascot_image') ): ?>
                    <?php while( have_rows('mascot_image') ): the_row(); ?>
                        <a class="test cell" href="<?php the_sub_field('image'); ?>" data-lightbox="mascots">
                            <img src="<?php the_sub_field('image'); ?>" />
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>      

                </div>
                    </div>
                </div>
            </div>
    </section>
</div><!-- end #container -->

<?php get_footer(); ?>


