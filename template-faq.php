<?php
/*
Template Name: FAQ
*/

get_header(); ?>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 faqPage">
                <div class="grid-x grid-padding-x align-center">
                    <div class="large-10 cell top-title">
                        <h1>FAQ</h1>
                    </div>
                    <div class="large-10 cell">
                        
                        <!-- content -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center">
                            <div class="large-12 cell">
                                <h2>Do you have questions</h2>
                                Let us try to answer some.
                                <div class="accord">
                                    <ul class="accordion" data-accordion>
                                        <?php 
                        query_posts( array(
                                'post_type'  => 'faqs',
                                'order'    => 'ASC',
                                'posts_per_page' => -1
                        )); ?>
                                        <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                                        <li class="accordion-item" data-accordion-item>
                                            <!-- Accordion tab title -->
                                            <a href="#" class="accordion-title">
                                                <?php the_field( 'question' ); ?></a>
                                            <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                                            <div class="accordion-content" data-tab-content>
                                                <p>
                                                    <?php the_field( 'answer' ); ?>
                                                </p>
                                            </div>
                                        </li>
                                        <?php endwhile ?>
                                        <?php endif?>
                                        <!-- ... -->
                                    </ul>
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