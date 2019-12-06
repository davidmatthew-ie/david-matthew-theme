<?php
/**
 * The partial for displaying post previews.
 *
 * @package David_Matthew_IE
 */


/**
 * Get the published and modified dates.
 */
$date_string   = get_the_date( 'j M Y' );
$original_time = get_the_time( 'U' );
$modified_time = get_the_modified_time( 'U' );
if ( $modified_time >= $original_time + 86400 ) {
	$date_string .= ' (Updated ' . get_the_modified_date( 'j M Y' ) . ')';
}

/**
 * Create an array of the tag names.
 */
$feat_post_tags = get_the_tags();
$fp_tag_names   = [];
foreach ( $feat_post_tags as $fpt ) {
	array_push( $fp_tag_names, $fpt->name );
}

?>

<a href="<?php the_permalink(); ?>" class="container-link">

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'preview animated fadeInUp flex-row' ); ?>>

		<div class="preview-content">

			<?php the_title( '<h2 class="preview-title">', '</h2>' ); ?>

			<span class="preview-info"><i class="fas fa-calendar-alt"></i><?php echo esc_html( $date_string ); ?></span>

			<span class="preview-info"><i class="fas fa-tags"></i><?php echo esc_html( implode( ', ', $fp_tag_names ) ); ?></span>

			<div class="read-more">

				<?php echo wp_kses_post( substr( get_the_content(), 0, 180 ) ) . '...'; ?>

				<span class="text-red">[read more]</span>

			</div>

		</div>

		<div class="preview-img">

			<img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title(); ?>"/>

		</div>

	</article><!-- #post-<?php the_ID(); ?> -->

</a>
