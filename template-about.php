<?php
/*
Template Name: About
*/

get_header(); ?>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 aboutPage">
                <div class="grid-x grid-padding-x align-center">
                    <div class="large-10 cell top-title">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <div class="large-10 cell">

                        <!-- content -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center">
                            <?php if (have_rows('section_1')) : ?>
                                <?php while (have_rows('section_1')) : the_row(); ?>
                                    <div class="large-6 cell">
                                        <h2>
                                            <?php the_sub_field('headline'); ?>
                                        </h2>
                                        <?php the_sub_field('text'); ?>
                                    </div>
                                    <div class="large-6 cell text-right">
                                        <img src="<?php the_sub_field('image'); ?>" />
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="grid-x grid-padding-x grid-padding-y grid-margin-y  align-center">
                            <?php if (have_rows('section_2')) : ?>
                                <?php while (have_rows('section_2')) : the_row(); ?>
                                    <div class="large-6 cell small-order-2 medium-order-1 text-left">
                                        <img src="<?php the_sub_field('image'); ?>">
                                    </div>
                                    <div class="large-6 cell small-order-1 medium-order-2">
                                        <h2>
                                            <?php the_sub_field('headline'); ?>
                                        </h2>
                                        <?php the_sub_field('text'); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="grid-x grid-padding-x grid-padding-y grid-margin-y align-center">
                            <?php if (have_rows('section_3')) : ?>
                                <?php while (have_rows('section_3')) : the_row(); ?>
                                    <div class="large-6 cell">
                                        <h2>
                                            <?php the_sub_field('headline'); ?>
                                        </h2>
                                        <?php the_sub_field('text'); ?>
                                    </div>
                                    <div class="large-6 cell text-right">
                                        <img src="<?php the_sub_field('image'); ?>" />
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <!-- end content -->

                    </div>
                </div>
            </div>
        </div>
    </section>



</div><!-- end #container -->
<?php get_footer(); ?>