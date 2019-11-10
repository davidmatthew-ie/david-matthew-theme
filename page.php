<?php
/**
 * The template for displaying generic pages.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<main id="page" class="container content-area">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'partials/content', 'page' );

		get_sidebar();

	endwhile;
	?>

</main>

<?php
get_footer();
