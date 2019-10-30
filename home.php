<?php
/**
 * The home page.
 *
 * @package David_Matthew_IE
 */

get_header();

?>

<div class="bg-img-full" style="background-image: url('<?php echo esc_url( get_theme_mod( 'home_bg_img' ) ); ?>')">

	<div class="overlay"></div>

</div>

<div id="primary" class="container content-area">

	<main id="main" class="site-main">

		<div id="homepage-content">

			<div class="col">

				<h1 class="heading-large text-center">

					<span id="heading-first" class="text-gradient-black-red">Hello &</span><br>

					<span id="heading-second" class="text-gradient-black-red">Welcome!</span>

				</h1>

				<p>Thanks for visiting my website. I'm David, and I like to write code, music and words. Thanks for visiting my website. I'm David, and I like to write code, music and words.</p>

			</div>

			<div class="col">

				<p>Some pretend content.</p>

			</div>

		</div>

	</main>

</div>

<?php

get_footer();
