<?php
/**
 * The template for displaying generic pages.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<div class="container content-area">

	<main>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'partials/content', 'page' );

		endwhile;
		?>

	</main>

	<?php get_sidebar(); ?>

</div>

<?php

get_footer();

