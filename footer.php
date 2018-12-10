<div class="section-four-wrapper">
    <div class="container-fluid">
        <div class="row testimonial-section">
            <h2><?php _e( '<b>What</b> our clients say...', 'ion' ); ?></h2>

            <?php 
            $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10 );
            $blog_query = new WP_Query( $args );

            while($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <div class="col-6">
                    <div class="testimonial-box">
                        <div class="tb-content"><?php the_excerpt(); ?></div>

                        <?php if( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail('testimonial-avatar'); ?>
                        <?php } else { ?>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/avatar-default.png" />
                        <?php } ?>  

                        <h3><?php the_title(); ?></h3>
                        <p class="tb-company"><?php testimonial_role(); ?></p>
                    </div><!--.testimonial-box-->
                </div><!--.col-6-->
            <?php endwhile; ?>

            <?php wp_reset_postdata(); // reset the query ?>

        </div><!-- .testimonial-section -->
       
        <div class="row company-logos">
            <div class="col"><img class="cl-1" src="<?php bloginfo('stylesheet_directory');?>/images/testimonial-faded-1.png" alt="company logo"></div>
            <div class="col"><img class="cl-2" src="<?php bloginfo('stylesheet_directory');?>/images/testimonial-faded-2.png" alt="company logo"></div>
            <div class="col"><img class="cl-3" src="<?php bloginfo('stylesheet_directory');?>/images/testimonial-faded-3.png" alt="company logo"></div>
            <div class="col"><img class="cl-4" src="<?php bloginfo('stylesheet_directory');?>/images/testimonial-faded-4.png" alt="company logo"></div>
            <div class="col"><img class="cl-5" src="<?php bloginfo('stylesheet_directory');?>/images/testimonial-faded-5.png" alt="company logo"></div>
        </div><!--company-logos-->

    </div><!--.container-fluid -->
</div><!--.wrapper -->

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col company">
                <h3><?php _e( 'Company', 'ion' ); ?></h3>
                
                <p class="address"><?php _e( 
                   'Ion Results Marketing <br>
                   1828 Red Spruce Ln, <br>
                   Mechanicsburg, PA 17050'); ?>
                </p>

                <p class="phone"><?php _e( 
                   'Phone: (617) 615.9895 <br>
                   Toll Free: 800.567.8910'); ?>
                </p>
            </div><!--col-->

            <div class="col footermenu">
                <h3><?php _e( 'Links', 'ion' ); ?></h3> 
                <?php wp_nav_menu(array( 'theme_location' => 'footer_menu', 'container_class' => 'footer-links' )); ?>
            </div><!--.col-->

            <div class="col recent-posts">
                <h3><?php _e( 'Recent Posts', 'ion' ); ?></h3> 
                <div class="footerposts">
                    <ul>
                        <?php $footer_query = new WP_Query('posts_per_page=5');
                        while($footer_query->have_posts()) : $footer_query->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); // reset the query ?>
                    </ul>
                </div><!-- .footerposts -->

            </div><!--.col-->
            
            <div class="col-5 newsletter  col-md-pull-2">
                <h3><?php _e( 'Stay up to date', 'ion' ); ?></h3>
                <p><?php _e( '', 'ion' ); ?></p>

                <div class="subscribeform">
                    <?php echo do_shortcode('[contact-form-7 id="57" title="Subscribe Form" html_class="use-floating-validation-tip"]'); ?>
                    <p class="note"><?php _e('Your email will be used to send you our new blog posts and updates. You can unsubscribe at any time using the link in our emails.
For more details, review our Privacy Policy.', 'ion');?></p>
                </div>
            </div>
        </div><!--.row-->

        <div class="row copyrightcontainer">
            <div class="copyright">
                <span class="copy-links">
                    <?php _e( '&copy;', 'ion' ); ?>
                    <?php the_date('Y'); ?>
                    <?php _e( '&copy; ION. All rights reserved.', 'ion' ); ?>
                    <?php _e( '<a href="#">Terms of Service </a>', 'ion' ); ?>
                    <?php _e( '<a href="#">Sitemap</a>', 'ion' ); ?>
                </span>

                <span class="social-links">
                    <a class="facebook" href="#"></a>
                    <a class="youtube" href="#"></a>
                    <a class="twitter" href="#"></a>
                    <a class="instagram" href="#"></a>
                    <a class="linkedin" href="#"></a>
                </span><!--.social-links-->

            </div><!-- .copyright -->
        </div><!--.row-->
    </div><!--.container-fluid-->
</footer>

<?php wp_footer(); ?>

</body>
</html>
