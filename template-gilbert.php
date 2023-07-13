<?php
/*
Template Name: Gilbert
*/

get_header(); ?>
<style>
.gilbtns {
    margin-top: 40px
}

.gilbtns a {
    display: block;
    background: #fff;
    margin-bottom: 20px;
    text-align: center;
    color: #f0552a;
    font-size: 20px;
    border-radius: 60px;
    padding: 20px;
    border: solid 2px #f0552a;
}

.gilbtns a:hover {
    background: #f0552a;
    color: #fff;
}

.top-title img {
    width: 150px;
    margin: 0 auto !important;
}

.top-title {
    text-align: center
}

.top-bar .mainLogo,
header {
    display: none
}

.container {
    padding-top: 0 !important;
}

.pageBG {
    background: #fff
}

footer {
    display: none;
}

.gilFooter {
    background: #f0552a;
    padding: 20px;
}

.insta img {
    object-fit: cover;
    width: 350px;
    height: 350px
}


/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 1000px) {

    .insta img {
        object-fit: contain;
        width: 200px;
        height: 200px;
        background: red;
    }

}



.social a {
    background: rgba(255, 255, 255, 0.3);
    width: 40px;
    height: 40px;
    font-size: 22px;
    display: inline-block;
    border-radius: 50%;
    line-height: 40px;
    text-align: center;
    color: #fff;
    margin: 0 7px;
}

.social a:hover {
    background: #fff;
    color: #f0552a;
}

.grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.square img {
    object-fit: cover;
    height:100%;
    width:100%;
}

.imCon{
    display: block;
    aspect-ratio: 1/1;
}

.square a span{
    font-size:17px;
    padding-top:10px;
    display: inline-block;
    font-weight: 600;
    color:#0087c5;
    line-height: 21px;
}

.whiteBG2{
    margin-bottom:20px;
    margin-top: 0;
}
</style>
<div class="container">
    <section class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2">
                <div class="grid-x grid-padding-x align-center">
                    <div class="large-10 cell top-title">
                        <?php if ( get_field( 'header_image' ) ) : ?>
                        <img src="<?php the_field( 'header_image' ); ?>" />
                        <?php endif ?>
                    </div>
                    <div class="large-10 cell">
                        <!-- content -->
                        <div class="grid-x grid-padding-x grid-padding-y align-center gilbtns">
                            <div class="large-12 cell">
                                <a href="https://newsie.page.link/WPZm" target="_blank">Download Newsie</a>
                                <a href="/">Visit Website</a>
                                <a href="/launch-page/">Join Directory</a>
                                <?php if( have_rows('link') ): ?>
                                <?php while( have_rows('link') ): the_row(); ?>
                                <a href="<?php the_sub_field('link_url'); ?>">
                                    <?php the_sub_field('link_label'); ?>
                                </a>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="grid">
                            <?php if( have_rows('image_links') ): ?>
                            <?php while( have_rows('image_links') ): the_row(); ?>
                            <div class="square">
                                <a href="<?php the_sub_field('image_link'); ?>" target="_blank">
                                    <span class="imCon"><img src="<?php the_sub_field('image'); ?>"></span>
                                    <span><?php the_sub_field('title'); ?></span>
                                </a>
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
    <section class="gilFooter text-center">
        <div class=" grid-container">
            <div class="grid-x grid-padding-x grid-padding-y align-center">
                <div class="large-9 cell social">
                    <?php if( get_field('email') ): ?>
                    <a href="mailto:<?php the_field('email'); ?>"><i class="fa-regular fa-at"></i></a>
                    <?php endif; ?>
                    <?php if( get_field('facebook') ): ?>
                    <a href="<?php the_field('facebook'); ?>"><i class="fa-brands fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if( get_field('twitter') ): ?>
                    <a href="<?php the_field('twitter'); ?>"><i class="fa-brands fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if( get_field('instagram') ): ?>
                    <a href="<?php the_field('instagram'); ?>"><i class="fa-brands fa-instagram"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div><!-- end #container -->
<?php get_footer(); ?>