<?php
/**
 * The template for displaying search results pages.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<div class="container content-area flex-row">

	<main id="primary">

	<?php
	if ( have_posts() ) :
		?>

		<header class="page-header">

			<h1 class="entry-title animated fadeInLeft">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'david-matthew' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>

		</header>

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'partials/content', 'preview' );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'partials/content', 'none' );

	endif;
	?>

	</main>

</div><!-- #primary -->

<?php
get_footer();
