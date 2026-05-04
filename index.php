<?php
/**
 * Default template.
 *
 * Used as the fallback when a more specific template is not found.
 * On the homepage, front-page.php takes precedence and renders the
 * full single-page marketing layout. For all other routes (search,
 * archives, single posts, 404), this file renders a minimal post
 * loop inside the standard header/footer.
 *
 * @package phcx
 */

get_header();
?>

<section class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<header class="section-head">
				<?php if ( is_search() ) : ?>
					<h2><?php printf( esc_html__( 'Search results for: %s', 'phcx' ), '<em>' . esc_html( get_search_query() ) . '</em>' ); ?></h2>
				<?php elseif ( is_archive() ) : ?>
					<h2><?php the_archive_title(); ?></h2>
				<?php endif; ?>
			</header>

			<div class="post-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'service-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="service-media">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
							</div>
						<?php endif; ?>
						<div class="service-body">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
							<a class="service-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'phcx' ); ?> <span aria-hidden="true">&rarr;</span></a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<?php
			the_posts_pagination(
				array(
					'mid_size'  => 1,
					'prev_text' => __( '&larr; Previous', 'phcx' ),
					'next_text' => __( 'Next &rarr;', 'phcx' ),
				)
			);
			?>

		<?php else : ?>
			<header class="section-head">
				<h2><?php esc_html_e( 'Nothing found', 'phcx' ); ?></h2>
				<p><?php esc_html_e( 'We couldn\'t find what you were looking for.', 'phcx' ); ?></p>
			</header>
			<p style="text-align:center;">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'phcx' ); ?></a>
			</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
