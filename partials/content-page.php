<?php
/**
 * The partial for displaying page content.
 *
 * @package David_Matthew_IE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'partials/header-page' ); ?>

	<div class="entry-content animated fadeInUp">

		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'david-matthew' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
