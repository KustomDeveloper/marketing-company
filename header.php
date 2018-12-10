<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="head-wrapper">
        <div class="container-fluid">
            <div class="d-flex flex-row clearfix">
                <div class="logo-container">
                    <a href="<?php bloginfo('url'); ?>">
                        <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/ion-logo.png" />
                    </a>
                </div>

                <div class="main-nav">
                    <?php wp_nav_menu(array( 'theme_location' => 'main_menu' )); ?>
                </div>

                <div class="top-cta">
                    <a href="<?php bloginfo('url');?>/contact-us">
                        <button class="btn btn-primary top-cta-btn"><?php _e( 'Receive a Free estimate', 'ion' ); ?></button>
                    </a>
                    <p>or call us now <a href="tel:8004567891" class="topphone">
                       <?php _e( '800.621.6734', 'ion' ); ?></a>
                    </p>
                    <?php echo do_shortcode('[responsive_menu_pro]'); ?>
                </div>

            </div><!--.row-->
        </div><!--.container-fluid-->
    </div><!--.head-wrapper-->