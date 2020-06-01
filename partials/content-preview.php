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

?>

<a href="<?php the_permalink(); ?>" class="container-link">

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'preview animated fadeInUp flex-row' ); ?>>

		<div class="preview-content">

			<?php the_title( '<h2 class="preview-title">', '</h2>' ); ?>

			<span class="preview-info"><i class="fas fa-calendar-alt"></i><?php echo esc_html( $date_string ); ?></span>
			
			<div class="read-more">

				<p><?php echo strip_tags( substr( get_the_content(), 0, 180 ) ) . '...'; ?></p>

				<span class="text-red">[read more]</span>

			</div>

		</div>

		<div class="preview-img">

			<img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="<?php the_title(); ?>"/>

		</div>

	</article><!-- #post-<?php the_ID(); ?> -->

</a>
