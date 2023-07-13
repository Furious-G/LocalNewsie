<?php
/*
Template Name: Business List 2
*/

get_header(); ?>



                <?php 
                        query_posts( array(
                                'post_type'  => 'licensee',
                                'order'    => 'ASC',
                                'meta_key'      => 'user_id',
                                'meta_value'    => 25,
                                'posts_per_page' => -1
                        )); 
                ?>
<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>


<?php $user_id = get_field( 'user_id' ); ?>
<?php if ( $user_id ) : ?>
    <?php $user_data = get_userdata( $user_id ); ?>

       <?php echo esc_html( $user_data->user_email ); ?>

<?php if ( get_field( 'test' ) ): ?>
checked
<?php endif; ?>
<?php if( have_rows('territories') ): ?>
        <?php $i = 0; ?>
        <?php update_sub_field( array('repeater', 1, 'territory'), 'peoria' ); ?>
    <?php while( have_rows('territories') ): the_row(); ?>
            <?php $i++; ?>
            <?php $org_subbed = get_sub_field('orginizations_submitted'); ?>
            <?php if ( !$org_subbed == 'yes') : ?>
            <p><?php the_sub_field('territory'); ?></p>

            <?php else: ?>
            no 
            <?php endif; ?>
    <?php endwhile; ?>

<?php endif; ?>
<?php //update_sub_field( array('territories', 1, 'territory'), 'Chandler' ); ?>
<?php endif; ?>


                <?php endwhile ?>
                <?php endif ?>
                <?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 teamPage">
                <div class="grid-x grid-padding-x grid-padding-y align-center">
                    <div class="large-10 cell top-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="large-10 cell">
                        test
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- end #container -->




