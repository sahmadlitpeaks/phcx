<?php
/**
 * Site header.
 *
 * @package phcx
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ? get_bloginfo( 'description' ) : 'Precision Health Clinix combines advanced diagnostics, DNA insights, biomarker analysis, and lifestyle medicine to deliver care tailored to your biology, goals, and long-term health needs.' ); ?>" />
	<meta name="theme-color" content="#801014" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to main content', 'phcx' ); ?></a>

<header class="site-header" id="top">
	<div class="container header-inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<?php
			if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
				the_custom_logo();
			} else {
				printf(
					'<img class="brand-logo" src="%s" alt="%s" width="220" />',
					esc_url( phcx_asset( 'assets/img/logo.png' ) ),
					esc_attr( get_bloginfo( 'name' ) )
				);
			}
			?>
		</a>

		<button class="nav-toggle" aria-expanded="false" aria-controls="primary-nav" aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'phcx' ); ?>">
			<span></span><span></span><span></span>
		</button>

		<nav id="primary-nav" class="primary-nav" aria-label="<?php esc_attr_e( 'Primary', 'phcx' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => '',
						'depth'          => 1,
						'fallback_cb'    => 'phcx_primary_menu_fallback',
					)
				);
			} else {
				phcx_primary_menu_fallback();
			}
			?>
			<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-primary nav-cta"><?php esc_html_e( 'Book a Visit', 'phcx' ); ?></a>
		</nav>
	</div>
</header>

<main id="main">
