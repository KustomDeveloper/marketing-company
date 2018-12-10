<?php
/*
Template Name: Home Template
*/

get_header(); ?>

<div class="section-one-wrapper">
    <div class="container-fluid">
        <div class="row top-section">
            <div class="col topcontent">
                <h1><?php _e( 'We put your business on the map', 'ion' ); ?></h1>
                <p><?php _e( 'We provide Solutions That Deliver More Customers, Grow Revenue, and Future-Proof Your Business', 'ion' ); ?></p>
                <div class="cta-btn">
                    <a href="<?php bloginfo('url'); ?>/contact-us"> <?php get_template_part('images/inline',  'cta-btn.svg');?></a>
                    <p class="no-upsell">No hard upsells, we are here to help 
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/smile.png" alt="smile icon">
                    </p>
                </div>
            </div><!-- .col -->
            <div class="col">
                <?php get_template_part('images/inline',  'top-graphic.svg');?>
            </div><!-- .col -->
        </div><!--.top-section-->
    </div><!--.container-fluid-->
</div><!--.section-one-wrapper-->

<div class="section-two-wrapper">
    <div class="container-fluid">
        <div class="row how-we-help">
            <h2><?php _e( '<b>We</b> can help', 'ion' ); ?></h2>
            <p><?php _e( 'Discover how we use highly researched keyword tracking, email marketing with <br> drip feeds, automatically recieve 5 star positive reviews from your customer <br> using modern tools so you always have a cutting edge on your competiton.', 'ion' ); ?></p>
            <div class="col">
                <div class="icon-1"><img width="58" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-1.png" alt="icon"></div>
                <h3><?php _e( 'Keywords& SEO', 'ion' ); ?></h3>
                <p><?php _e( '', 'ion' ); ?><?php _e( 'We use highly researched keywords on your website and optimize for local and global seo.', 'ion' ); ?></p>
            </div>
            <div class="col">
                <div class="icon-2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-2.png" alt="icon"></div>
                <h3><?php _e( 'Marketing Strategy', 'ion' ); ?></h3>
                <p><?php _e( 'We created a custom marketing strategy for each client designed only for their needs.', 'ion' ); ?></p>
            </div>
            <div class="col">
                <div class="icon-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-3.png" alt="icon"></div>
                <h3><?php _e( 'Email Marketing', 'ion' ); ?></h3>
                <p><?php _e( 'We help you do email marketing with drip feeds and daily broadcasts.', 'ion' ); ?></p>
            </div>
            <div class="col">
                <div class="icon-4"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-4.png" alt="icon"></div>
                <h3><?php _e( 'Positive Reviews', 'ion' ); ?></h3>
                <p><?php _e( 'Recieve positive reviews from your customers. Our modern workflow includes cutting edge tools.', 'ion' ); ?></p>
            </div>
            <div class="col">
                <div class="icon-5"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-5.png" alt="icon"></div>
                <h3><?php _e( 'Advertising Campaigns', 'ion' ); ?></h3>
                <p><?php _e( 'We use a multi-pronged marketing strategy in every one of our advertising campaigns.', 'ion' ); ?><?php _e( '', 'ion' ); ?></p>
            </div>
        </div><!-- .how-we-help -->
    </div><!--.container-fluid-->
</div><!--.section-two-wrapper-->

<div class="section-three-wrapper">
    <div class="container-fluid">
        <div class="row our-process">
            <div class="col-6">
                <div class="our-process-graphic">
                    <?php get_template_part('images/inline',  'marketing-team.svg');?>
                </div>
            </div>
            <div class="col-6">
                <h2><?php _e( '<b>Our</b> process', 'ion' ); ?></h2>
                <ul>
                    <li><?php _e( '<span>1</span>We\'ll start out by talking on the phone to get a sense of what your challenges are, what you’ve tried so far, and if we\'re the right digital marketing agency.', 'ion' ); ?></li>
                    <li><?php _e( '<span>2</span>We\'ll start out by talking on the phone to get a sense of what your challenges are, what you’ve tried so far, and if we\'re the right digital marketing agency.', 'ion' ); ?></li>
                    <li><?php _e( '<span>3</span>We\'ll start out by talking on the phone to get a sense of what your challenges are, what you’ve tried so far, and if we\'re the right digital marketing agency.', 'ion' ); ?></li>
                    <li><?php _e( '<span>4</span>We\'ll start out by talking on the phone to get a sense of what your challenges are, what you’ve tried so far, and if we\'re the right digital marketing agency.', 'ion' ); ?></li>
                </ul>
                <div class="cta-btn">
                    <a href="<?php bloginfo('url'); ?>/contact-us"> <?php get_template_part('images/inline',  'cta-btn.svg');?></a>
                    <p class="no-upsell">No hard upsells, we are here to help 
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/smile.png" alt="smile icon">
                    </p>
                </div>
            </div>
        </div><!-- .about-section -->
    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->

<?php get_footer(); ?>