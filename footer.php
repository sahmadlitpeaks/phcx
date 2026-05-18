<?php
/**
 * Site footer.
 *
 * @package phcx
 */
?>
</main><!-- #main -->

<footer class="site-footer">
	<div class="container footer-grid">
		<div>
			<div class="brand brand-footer">
				<img class="brand-logo" src="<?php echo esc_url( phcx_asset( 'assets/img/logo.png' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
			</div>
			<p><?php esc_html_e( 'Personalised, science-led healthcare combining advanced diagnostics, DNA insights, and lifestyle medicine.', 'phcx' ); ?></p>
		</div>

		<nav aria-label="<?php esc_attr_e( 'Footer', 'phcx' ); ?>">
			<strong><?php esc_html_e( 'Explore', 'phcx' ); ?></strong>
			<?php
			if ( has_nav_menu( 'footer' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => '',
						'depth'          => 1,
						'fallback_cb'    => 'phcx_footer_menu_fallback',
					)
				);
			} else {
				phcx_footer_menu_fallback();
			}
			?>
		</nav>

		<div>
			<strong><?php esc_html_e( 'Get in touch', 'phcx' ); ?></strong>
			<ul class="plain-list">
				<li><a href="tel:+971 4 579 4300">+971 4 579 4300</a></li>
				<li><a href="mailto:contact@prcnhealth.com">contact@prcnhealth.com</a></li>
				<li><?php esc_html_e( 'Dubai, United Arab Emirates', 'phcx' ); ?></li>
			</ul>
		</div>
	</div>

	<div class="container footer-bottom">
		<small>&copy; <span id="year"><?php echo esc_html( gmdate( 'Y' ) ); ?></span> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. <?php esc_html_e( 'All rights reserved.', 'phcx' ); ?></small>
		<small><?php esc_html_e( 'DHA-Licensed', 'phcx' ); ?> &middot; <?php esc_html_e( 'Internationally accredited laboratory partners', 'phcx' ); ?></small>
	</div>
</footer>

<a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="floating-cta" aria-label="<?php esc_attr_e( 'Book a consultation', 'phcx' ); ?>">
	<span class="fc-icon" aria-hidden="true">
		<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
	</span>
	<span class="fc-label"><?php esc_html_e( 'Book Now', 'phcx' ); ?></span>
</a>

<?php wp_footer(); ?>
</body>
</html>
