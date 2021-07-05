<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pillar-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'scroll-assist' ); ?>>
	<a id="top"></a>
    <div class="loader"></div>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<nav class="transition--fade">  
            <div class="nav-bar nav--absolute nav--transparent" data-fixed-at="200">
                <div class="nav-module logo-module left">
                    <a href="index.html">
                        <img class="logo logo-dark" alt="logo" src="<?php echo get_field( 'logo_header_dark' , 'option' ); ?>" />
                        <img class="logo logo-light" alt="logo" src="<?php echo get_field( 'logo_header_light' , 'option' ); ?>" />
                    </a>
                </div>
                <div class="nav-module menu-module left">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					?>
                </div>
                <!--end nav module-->
                <div class="nav-module right">
                    <a href="#" class="nav-function" data-notification-link="cart-overview">
                        <i class="interface-bag icon icon--sm"></i>
                        <span>Cart</span>
                    </a>
                </div>
                <div class="nav-module right">
                    <a href="#" class="nav-function modal-trigger" data-modal-id="search-form">
                        <i class="interface-search icon icon--sm"></i>
                        <span>Search</span>
                    </a>
                </div>
            </div>
            <!--end nav bar-->
            <div class="nav-mobile-toggle visible-sm visible-xs">
                <i class="icon-Align-Right icon icon--sm"></i>
            </div>
        </nav>
        
		<nav id="site-navigation" class="main-navigation">
		
			
		</nav><!-- #site-navigation -->
		<div class="modal-container search-modal" data-modal-id="search-form">
            <div class="modal-content bg-white imagebg" data-width="100%" data-height="100%">
                <div class="pos-vertical-center clearfix">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                        <form class="clearfix">
                            <div class="input-with-icon">
                                <i class="icon-Magnifi-Glass2 icon icon--sm"></i>
                                <input type="search" name="query" placeholder="Type your search and hit enter" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end of modal-content-->
        </div>
		
		<div class="main-container transition--fade">
		

