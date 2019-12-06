<?php
/**
 * Template Name: Slim Page
 *
 * The template for displaying pages without sidebar content.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<div class="container content-area flex-row">

	<main id="primary" class="page-slim">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'partials/content', 'page' );

		endwhile;
		?>

	</main>

</div>

<?php

get_footer();
