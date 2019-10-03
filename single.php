<?php
/**
 * The template for single posts.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<div id="primary" class="content-area">
		
	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'partials/content', get_post_type() );

			the_post_navigation();

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		endwhile;
		?>

	</main>

</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
