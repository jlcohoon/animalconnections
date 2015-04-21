<?php
/**
 * The template for displaying article headers
 *
 * @since 1.0.0
 */
?>
	<header class="entry-header">
		<h1 class="entry-title taggedlink">
			<?php if ( is_single() ) : ?>
				<?php the_title(); ?>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			<?php endif; // is_single() ?>
		</h1>

		<?php bavotasan_display_post_thumbnail(); ?>

		<div class="entry-meta">
			<p class="post-cat"><?php the_category( ' ' ); ?></p>

		</div>
	</header>