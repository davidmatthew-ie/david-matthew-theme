<?php
/**
 * The template for displaying archive pages.
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

		<header class="entry-header">

			<?php the_archive_title( '<h1 class="entry-title animated fadeInLeft">', '</h1>' ); ?>

		</header>

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'partials/content', 'preview' );
		}

		the_posts_navigation();

	else :

		get_template_part( 'partials/content', 'none' );

	endif;
	?>

	</main>

</div>

<?php
get_footer();
