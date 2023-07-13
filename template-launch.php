<?php
/*
Template Name: Launch
*/

get_header(); ?>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 launchPage">
                <div class="grid-x grid-padding-x align-center">
                    <div class="large-10 cell top-title">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <div class="large-10 cell">
                        <div class="grid-x grid-padding-x grid-padding-y align-center">
                            <div class="large-12 cell">

                                <div style="padding:20px 0">
                                    <?php the_field( 'content' ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="grid-x grid-padding-x grid-padding-y grid-margin-x grid-margin-y  small-up-1 medium-up-3 large-up-3 text-center boxes">
                            <?php 
                        query_posts( array(
                                'post_type'  => 'pagecategory',
                                'order'    => 'ASC',
                                'posts_per_page' => -1
                        )); ?>
                            <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                            <a href="<?php the_field( 'category_url' ); ?>" target="_blank" class="cell">
                                <img src="<?php the_field( 'category_image' ); ?>" alt="<?php the_title(); ?>" />
                                <span>
                                    <?php the_title(); ?>
                                </span>
                            </a>
                            <?php endwhile ?>
                            <?php endif?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- end #container -->
<?php get_footer(); ?>