<?php
/*
Template Name: Mascot Categories
*/

get_header(); ?>
<style>
</style>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2">
                <div class="grid-x grid-padding-x grid-padding-y align-center ">
                    <div class="large-10 cell top-title mascots">
                        <?php if( get_field('title') != "Mascots" ): ?>
                        <a href="/mascots" class="float-left backBtn"><i class="fa-solid fa-angle-left"></i> Back</a>
                        <?php endif; ?>
                        <h3>
                            <?php the_field( 'title' ); ?>
                        </h3>
                        <div class="grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y  small-up-1 medium-up-2 large-up-3 text-center">
                            <?php if( have_rows('categories') ): ?>
                            <?php while( have_rows('categories') ): the_row(); ?>
                            <a href="<?php the_sub_field('link'); ?>" class="cell">
                                <span>
                                    <img src="<?php the_sub_field('mascot_image'); ?>">
                                </span>
                                <h4>
                                    <?php the_sub_field('mascot_category'); ?>
                                </h4>
                            </a>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> <!-- end #content -->
</div><!-- end #container -->
<?php get_footer(); ?>