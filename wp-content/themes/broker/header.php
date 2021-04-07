<?php
/**
 * The theme header
 *
 * */
global $cg_options;
$cg_protocol = ( is_ssl() ) ? "https:" : "http:";

$cg_responsive_status = '';

if ( isset( $cg_options['cg_responsive'] ) ) {
	$cg_responsive_status = $cg_options['cg_responsive'];
}

$cg_preloader = '';

if ( isset( $cg_options['cg_preloader'] ) ) {
	$cg_preloader = $cg_options['cg_preloader'];
}

$cg_logo = '';

$cg_favicon = '';

if ( isset( $cg_options['cg_favicon']['url'] ) ) {
	$cg_options['cg_favicon']['url'] = $cg_protocol . str_replace( array( 'http:', 'https:' ), '', $cg_options['cg_favicon']['url'] );
	$cg_favicon						 = $cg_options['cg_favicon']['url'];
}

$cg_retina_favicon = '';

if ( isset( $cg_options['cg_retina_favicon']['url'] ) ) {
	$cg_options['cg_retina_favicon']['url']	 = $cg_protocol . str_replace( array( 'http:', 'https:' ), '', $cg_options['cg_retina_favicon']['url'] );
	$cg_retina_favicon						 = $cg_options['cg_retina_favicon']['url'];
}

$cg_topbar_display = '';

if ( isset( $cg_options['cg_topbar_display'] ) ) {
	$cg_topbar_display = $cg_options['cg_topbar_display'];
}

$cg_topbar_message = '';

if ( isset( $cg_options['cg_topbar_message'] ) ) {
	$cg_topbar_message = $cg_options['cg_topbar_message'];
}

$cg_display_cart = '';

if ( isset( $cg_options['cg_show_cart'] ) ) {
	$cg_display_cart = $cg_options['cg_show_cart'];
}

$cg_display_search = '';

if ( isset( $cg_options['cg_show_search'] ) ) {
	$cg_display_search = $cg_options['cg_show_search'];
}

$cg_catalog = '';

if ( isset( $cg_options['cg_catalog_mode'] ) ) {
	$cg_catalog = $cg_options['cg_catalog_mode'];
}

$cg_primary_menu_layout = '';

if ( isset( $cg_options['cg_primary_menu_layout'] ) ) {
	$cg_primary_menu_layout = $cg_options['cg_primary_menu_layout'];
}

$cg_sticky_menu = '';

if ( isset( $cg_options['cg_sticky_menu'] ) ) {
	$cg_sticky_menu = $cg_options['cg_sticky_menu'];
}

if ( !empty( $_SESSION['cg_header_top'] ) ) {
	$cg_topbar_display = $_SESSION['cg_header_top'];
}

$cg_shop_announcements = '';

if ( isset( $cg_options['cg_shop_announcements'] ) ) {
	$cg_shop_announcements = $cg_options['cg_shop_announcements'];
}

$cg_logo_position = '';

if ( isset( $cg_options['cg_logo_position'] ) ) {
	$cg_logo_position = $cg_options['cg_logo_position'];
}

if ( isset( $_GET['logo_position'] ) ) {
	$cg_logo_position = $_GET['logo_position'];
}
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php
		if ( $cg_responsive_status == 'enabled' ) {
			?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php } ?>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">        
        <link rel="shortcut icon" href="<?php
		if ( $cg_favicon ) {
			echo esc_url( $cg_favicon );
		} else {
			?><?php echo get_template_directory_uri(); ?>/favicon.png<?php } ?>"/>
         <link rel="apple-touch-icon-precomposed" href="<?php
		if ( $cg_retina_favicon ) {
			echo esc_url( $cg_retina_favicon );
		}?>"/>
		
       <!--[if lte IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script><![endif]-->
		<?php wp_head(); ?>
    </head>
    <body id="skrollr-body" <?php body_class(); ?>>

			<?php
			if ( $cg_preloader !== 'disabled' ) {
			?>
    	    <div class="cg-loader">
				<div class="cg-folding-cube">
				  <div class="cg-cube1 cg-cube"></div>
				  <div class="cg-cube2 cg-cube"></div>
				  <div class="cg-cube4 cg-cube"></div>
				  <div class="cg-cube3 cg-cube"></div>
				</div>
			</div>

			<script>
			( function ( $ ) { "use strict";
				$(window).load(function() {
					$(".cg-loader").fadeOut("slow");;
				});
			}( jQuery ) );
			</script>
			<?php } ?>
<header>
			<div class="container">
                <div class="top-header">
                    <div class="custom-logo col-lg-3">
                        <a class="logo__link" href="<?php echo the_permalink(); ?>">
                            <?php the_custom_logo();?>
                        </a>
                    </div>

                    <div class="header__info col-lg-9">
                        <ul class="header__info__list">
                            <li class="header__info__list__item">
                                <h4 class="email">+38 050-111-99-00</h4>
                                <a href="#" class="email">info@gmail.com</a>
                            </li>
                            <li class="header__info__list__item">
                                <h4 class="adress">03115, Киев ул. Беличанская, 1</h4>
                                <span class="adress__descr">Aдрес нашего офиса</span>
                            </li>
                            <li class="header__info__list__item">
                                <h4 class="work-time">09:00 – 20:00</h4>
                                <span class="work-day">Понедельник - Пятница</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		<div id="main-wrapper" class="content-wrap custom-menu">

			<?php if ( $cg_logo_position == 'left' ) { ?>
				<?php get_template_part( 'partials/header', 'left' ); ?>

			<?php } else { ?>
				<?php get_template_part( 'partials/header', 'left' ); ?>
			<?php } ?>


			<?php
			if ( $cg_responsive_status !== 'disabled' ) {
				?>
				<div id="mobile-menu">
					<a id="skip" href="#cg-page-wrap" class="hidden" title="<?php esc_attr_e( 'Skip to content', 'broker' ); ?>"><?php esc_html_e( 'Skip to content', 'broker' ); ?></a> 
					<?php
					if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'mobile' ) ) {
						wp_nav_menu( array( 'theme_location' => 'mobile', 'container' => 'ul', 'menu_id' => 'mobile-cg-mobile-menu', 'menu_class' => 'mobile-menu-wrap', 'walker' => new cg_mobile_menu() ) );
					} elseif ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'mobile-cg-primary-menu', 'menu_class' => 'mobile-menu-wrap', 'walker' => new cg_mobile_menu() ) );
					}
					?>
				</div><!--/mobile-menu -->
			<?php } ?>
</header>
			<div id="cg-page-wrap" class="hfeed site">
				