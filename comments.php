<?php
/**
 * The template for displaying comments.
 *
 * @package David_Matthew_IE
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			
            <?php
			$david_matthew_comment_count = get_comments_number();
			if ( '1' === $david_matthew_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'david-matthew' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $david_matthew_comment_count, 'comments title', 'david-matthew' ) ),
					number_format_i18n( $david_matthew_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                )
            );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		if ( ! comments_open() ) {
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'david-matthew' ); ?></p>
			<?php
		}

	endif;

	comment_form();
	?>

</div><!-- #comments -->
