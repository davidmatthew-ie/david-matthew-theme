<?php
/**
 * The template for single posts.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<main id="single-post" class="container content-area">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'partials/content', get_post_type() );

		// the_post_navigation();

		get_sidebar();

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

	endwhile;

	?>

</main>

<?php
get_footer();
