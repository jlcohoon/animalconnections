<?php
/**
 * The front page template.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();

global $paged;
$bavotasan_theme_options = bavotasan_theme_options();

if ( get_query_var( 'paged' ) ) {
	$paged = get_query_var( 'paged' );
} elseif ( get_query_var( 'page' ) ) {
	$paged = get_query_var( 'page' );
} else {
	$paged = 1;
}

if ( 2 > $paged ) {
	if ( get_header_image() ) : ?>
		<img class="header-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<?php
	endif;

	// Display jumbo headline widgetized area
	if ( is_active_sidebar( 'jumbo-headline' ) ) {
		?>
		<div class="home-top">
			<div class="container">
				<div class="row">
					<div class="home-jumbotron col-md-10 col-md-offset-1">
						<img src="/wp-content/themes/farben-basic//library/images/zula.png" alt="dog-graphic">
						<?php dynamic_sidebar( 'jumbo-headline' ); ?>

					</div>
				</div>
			</div>
		</div>
		<?php
	}
}
?>



<div class="container">
<hr>
	<div class="row two-recent">
	    <div class="col-md-9">
            <h2>Meet our newest friends</h2>
           <?php query_posts('showposts=2'); ?>
                <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile;?>
        <a href="/?page_id=9"><h4>More</h4></a>
        </div>

	<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();