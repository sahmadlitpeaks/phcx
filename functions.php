<?php
/**
 * Precision Health Clinix theme functions.
 *
 * @package phcx
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'phcx_setup' ) ) {
	/**
	 * Register theme support flags and navigation menus.
	 */
	function phcx_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
		);
		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 280,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'phcx' ),
				'footer'  => __( 'Footer Menu', 'phcx' ),
			)
		);

		load_theme_textdomain( 'phcx', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'phcx_setup' );

/**
 * Enqueue theme styles and scripts.
 */
function phcx_enqueue_assets() {
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' ) ? $theme->get( 'Version' ) : '1.0.0';

	wp_enqueue_style(
		'phcx-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Fraunces:wght@500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'phcx-style',
		get_stylesheet_uri(),
		array( 'phcx-fonts' ),
		$version
	);

	wp_enqueue_script(
		'phcx-script',
		get_template_directory_uri() . '/script.js',
		array(),
		$version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'phcx_enqueue_assets' );

/**
 * Add preconnect hints for the Google Fonts CDN.
 *
 * @param array  $urls          Existing URLs.
 * @param string $relation_type Relation type.
 * @return array
 */
function phcx_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type && wp_style_is( 'phcx-fonts', 'enqueued' ) ) {
		$urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' );
		$urls[] = array( 'href' => 'https://fonts.googleapis.com' );
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'phcx_resource_hints', 10, 2 );

/**
 * Default nav fallback used when no menu is assigned to the "primary" location.
 */
function phcx_primary_menu_fallback() {
	$items = array(
		'#about'      => __( 'About Us', 'phcx' ),
		'#team'       => __( 'Team', 'phcx' ),
		'#homecare'   => __( 'Home-Care', 'phcx' ),
		'#telehealth' => __( 'Tele-Health', 'phcx' ),
		'#clinic' => __( 'In-Clinic', 'phcx' ),
		'#contact'    => __( 'Contact Us', 'phcx' ),
	);

	echo '<ul>';
	foreach ( $items as $href => $label ) {
		printf(
			'<li><a href="%s">%s</a></li>',
			esc_url( home_url( '/' ) . $href ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

/**
 * Default nav fallback used when no menu is assigned to the "footer" location.
 */
function phcx_footer_menu_fallback() {
	phcx_primary_menu_fallback();
}

/**
 * Helper for asset URLs inside templates.
 *
 * @param string $path Relative path under the theme.
 * @return string
 */
function phcx_asset( $path ) {
	return get_template_directory_uri() . '/' . ltrim( $path, '/' );
}
