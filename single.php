<?php
/**
 * Single post template.
 *
 * @package phcx
 */

get_header();
?>

<section class="section">
	<div class="container" style="max-width: 820px;">
		<?php while ( have_posts() ) : the_post(); ?>
			<header class="section-head" style="text-align:left;">
				<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
				<h2><?php the_title(); ?></h2>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="media-banner" style="margin-bottom: 2rem;">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>

			<div class="page-content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
