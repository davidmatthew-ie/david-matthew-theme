<?php
/**
 * The template for single posts.
 *
 * @package David_Matthew_IE
 */

get_header();

?>

<div class="container content-area flex-row">

	<main id="primary">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'partials/content', get_post_type() );

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		endwhile;
		?>

	</main>

	<?php get_sidebar(); ?>

</div>

<?php

get_footer();

