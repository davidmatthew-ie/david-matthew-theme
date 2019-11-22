<?php
/**
 * The template for displaying archive pages.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<div id="primary" class="content-area container">
	
	<main id="main" class="site-main">

	<?php 
	if ( have_posts() ) :
		?>

		<header class="page-header">
			
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		
		</header>

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'partials/content', get_post_type() );
		}

		the_posts_navigation();

	else :

		get_template_part( 'partials/content', 'none' );

	endif;
	?>

	</main>

</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
