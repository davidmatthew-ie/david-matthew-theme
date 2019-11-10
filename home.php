<?php
/**
 * The home page.
 *
 * @package David_Matthew_IE
 */

get_header();

?>

<div class="bg-img-full kb-zoom" style="background-image: url('<?php echo esc_url( get_theme_mod( 'home_bg_img' ) ); ?>')">

	<div class="overlay"></div>

</div>

<main id="homepage-content" class="container content-area">

	<div class="row">

		<div class="col">

			<div id="title">

				<div class="img-wrap animated fadeInLeft">

					<img src="<?php echo esc_url( get_theme_mod( 'home_profile_img' ) ); ?>" alt="David Matthew">

				</div>

				<h1 class="animated fadeInDown">

					<span id="heading-first" class="text-gradient-black-red"><?php echo esc_html( get_theme_mod( 'heading_pt_1' ) ); ?></span><br>

					<span id="heading-second" class="text-gradient-black-red"><?php echo esc_html( get_theme_mod( 'heading_pt_2' ) ); ?></span>

				</h1>

			</div>


			<p id="intro" class="animated fadeInUp"><?php echo wp_kses_post( get_theme_mod( 'intro' ) ); ?></p>

			<?php get_template_part( 'partials/social' ); ?>

		</div>

		<div class="col">

			<?php get_template_part( 'partials/slider' ); ?>

		</div>

	</div>


</main>

<?php

get_footer();
