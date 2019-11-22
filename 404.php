<?php
/**
 * The template for displaying 404 pages.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<div id="primary" class="content-area container">

	<main id="main" class="site-main">

		<section class="error-404 not-found">

			<header class="page-header">

				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'david-matthew' ); ?></h1>

			</header>

		</section>

	</main>

</div>

<?php
get_footer();
