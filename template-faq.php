<?php
/*
Template Name: FAQ
*/

get_header(); ?>
<style>
    .divider {
        color: #F0552A;
        font-size: 1.2rem !important;
        margin-top: 30px;
        border-bottom: dotted;
        padding-bottom: 8px !important;
        margin-bottom: 30px;
        border-color: grey;
    }
</style>

<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 faqPage">
                <div class="grid-x grid-padding-x align-center">
                    <div class="large-10 cell top-title">
                        <?php
                        if (is_page('answers')) : ?>
                            <h1>Questions/Answers</h1>
                            <br>
                        <?php elseif (is_page('faq')) : ?>
                            <h1>FAQ</h1>
                        <?php endif ?>
                    </div>
                    <div class="large-10 cell">

                        <!-- content -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center">
                            <div class="large-12 cell">
                                <?php
                                if (is_page('faq')) : ?>
                                    <h2>Do you have questions</h2>
                                    Let us try to answer some.
                                <?php endif ?>
                                <div class="accord">
                                    <ul class="accordion" data-accordion>
                                        <?php
                                        if (is_page('answers')) {
                                            query_posts(array(
                                                'post_type'  => 'qa',
                                                'order'    => 'ASC',
                                                'posts_per_page' => -1
                                            ));
                                        } elseif (is_page('faq')) {
                                            query_posts(array(
                                                'post_type'  => 'faqs',
                                                'order'    => 'ASC',
                                                'posts_per_page' => -1
                                            ));
                                        }
                                        ?>
                                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                                <?php if (get_field('divider') == 1) : ?>
                                                    <h4 class="divider"><?php the_field('section_title'); ?></h4>
                                                <?php else : ?>
                                                    <li class="accordion-item" data-accordion-item>
                                                        <!-- Accordion tab title -->
                                                        <a href="#" class="accordion-title">
                                                            <?php the_field('question'); ?></a>
                                                        <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                                                        <div class="accordion-content" data-tab-content>
                                                            <p>
                                                                <?php echo wp_kses_post(get_field('answer')); ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>

                                            <?php endwhile ?>
                                        <?php endif ?>
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