<?php
/**
 * Default page template.
 *
 * @package phcx
 */

get_header();
?>

<section class="section">
	<div class="container" style="max-width: 820px;">
		<?php while ( have_posts() ) : the_post(); ?>
			<header class="section-head" style="text-align:left;">
				<h2><?php the_title(); ?></h2>
			</header>
			<div class="page-content">
				<?php the_content(); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links"><span>' . esc_html__( 'Pages:', 'phcx' ) . '</span>',
						'after'  => '</div>',
					)
				);
				?>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
