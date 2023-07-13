<?php
/*
Template Name: Team
*/

get_header(); ?>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 teamPage">
                <div class="grid-x grid-padding-x align-center">
                    <div class="large-10 cell top-title">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <div class="large-10 cell">

                        <!-- content -->
                        <div class="grid-x grid-padding-x grid-padding-y">
                            <div class="large-6 cell medium-12 self-align-top">
                                <h2>Newsie Inc.</h2>
                                The Newsie team brings a dynamic skill set that coalesces in providing an integrated and highly engaging digital platform unparalleled in the industry.
                            </div>
                            <?php 
                        query_posts( array(
                                'post_type'  => 'teammembers',
                                'order'    => 'ASC',
                                'posts_per_page' => -1
                        )); ?>
                            <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                            <?php $postid = get_the_ID(); ?>
                            <div class="large-3 medium-3 cell members">
                                <a href="#<?php echo $postid?>" rel="modal:open">
                                    <div>
                                        <?php if( get_field('photo') ): ?>
                                        <img src="<?php the_field( 'photo' ); ?>" class="">
                                        <?php else : ?>
                                        <img src="/wp-content/uploads/user.png">
                                        <?php endif; ?>
                                        <span>
                                            <?php the_field( 'first_name' ); ?>
                                            <?php the_field( 'last_name' ); ?>
                                            <?php if( get_field('title') ): ?>,
                                            <?php endif; ?>
                                            <?php the_field( 'title' ); ?>
                                        </span>
                                    </div>
                                </a>
                                <!-- Neal Pop -->
                                <div id="<?php echo $postid?>" class="modal">
                                    <div class="grid-x grid-padding-x grid-padding-y members">
                                        <div class="large-8 cell">
                                            <h3>
                                                <?php the_field( 'first_name' ); ?>
                                                <?php the_field( 'last_name' ); ?>
                                                <?php if( get_field('title') ): ?>,
                                                <?php endif; ?>
                                                <?php the_field( 'title' ); ?>
                                            </h3>
                                            <?php the_field( 'bio' ); ?>
                                        </div>
                                        <div class="large-4 cell">
                                            <?php if( get_field('photo') ): ?>
                                            <img src="<?php the_field( 'photo' ); ?>" alt="<?php the_field( 'first_name' ); ?>" class="">
                                            <?php else : ?>
                                            <img src="/wp-content/uploads/user.png">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Neal Pop -->
                            </div>
                            <?php endwhile ?>
                            <?php endif ?>
                            <?php wp_reset_query();?>
                            <div class="large-6 cell medium-12 text-center align-self-middle">
                                <strong style="font-size:19px;">Technology Team</strong>
                                <a href="https://techfabric.com/"><img src="/wp-content/uploads/Logo-TechFabric.png" alt="Tech Fabric" class="techfab"></a>
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