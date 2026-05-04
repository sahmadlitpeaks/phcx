<?php
/**
 * 404 template.
 *
 * @package phcx
 */

get_header();
?>

<section class="section">
	<div class="container" style="text-align:center; max-width: 640px;">
		<header class="section-head">
			<p class="eyebrow">404</p>
			<h2><?php esc_html_e( 'Page not found', 'phcx' ); ?></h2>
			<p><?php esc_html_e( 'The page you were looking for doesn\'t exist or has moved. Let\'s get you back on track.', 'phcx' ); ?></p>
		</header>
		<p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'phcx' ); ?></a>
		</p>
	</div>
</section>

<?php get_footer(); ?>
