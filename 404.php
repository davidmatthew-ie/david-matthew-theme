<?php
/**
 * The template for displaying 404 pages.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<div id="primary" class="content-area">
	
	<main id="main" class="site-main">

		<section class="error-404 not-found">
			
			<header class="page-header">
				
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'david-matthew' ); ?></h1>
			
			</header>

			<div class="page-content">
				
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'david-matthew' ); ?></p>

				<?php get_search_form(); ?>

			</div>
		
		</section>

	</main>

</div>

<?php
get_footer();
