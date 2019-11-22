<?php
/**
 * The partial for displaying the featured posts slider.
 *
 * @package David_Matthew_IE
 */

$feat_posts[] = get_post( get_theme_mod( 'feat_post_1' ) );
$feat_posts[] = get_post( get_theme_mod( 'feat_post_2' ) );
$feat_posts[] = get_post( get_theme_mod( 'feat_post_3' ) );

?>


<div class="slider-header">

	<h2 class="animated fadeInLeft"><i class="fas fa-rss"></i>Featured <span class="text-red">Posts</span></h2>

	<a href="<?php echo esc_url( get_theme_mod( 'blog_url' ) ); ?>">

		<h2 class="animated fadeInRight"><i class="fas fa-list-ul"></i>View <span class="text-red">All</span></h2>

	</a>

</div>

<div class="slider-body animated fadeInUp">

	<div id="slider">

		<?php

		foreach ( $feat_posts as $feat_post ) {

			?>

			<a href="<?php echo esc_url( get_permalink( $feat_post->ID ) ); ?>">

				<div class="post-preview">

					<div class="post-div">

						<h3><?php echo esc_html( $feat_post->post_title ); ?></h3>

						<div class="post-date">

							<i class="fas fa-calendar-alt"></i><span><?php echo esc_html( get_the_modified_date( '', $feat_post->ID ) ); ?></span>

						</div>

						<div class="read-more-tablet">

							<?php echo wp_kses_post( substr( $feat_post->post_content, 0, 110 ) ) . '...'; ?>

							<span class="text-red">[read more]</span>

						</div>

						<div class="read-more-desktop">

							<?php echo wp_kses_post( substr( $feat_post->post_content, 0, 170 ) ) . '...'; ?>

							<span class="text-red">[read more]</span>

						</div>

						<div class="read-more-mobile">

							<em><span class="text-red">Read More...</span></em>

						</div>

						<div class="post-tags">

							<i class="fas fa-tags"></i>

							<span>

								<?php

								$feat_post_tags = get_the_tags( $feat_post->ID );
								$feat_post_tag_names = [];
								foreach ( $feat_post_tags as $fpt ) {
									array_push( $feat_post_tag_names, $fpt->name );
								}

								echo esc_html( implode( ', ', $feat_post_tag_names ) );

								?>

							</span>

						</div>

					</div>

					<div class="post-div">

						<img src="<?php echo esc_url( get_the_post_thumbnail_url( $feat_post->ID, 'thumbnail' ) ); ?>" alt="<?php echo esc_html( $feat_post->post_title ); ?>"/>

					</div>

				</div>

			</a>

			<?php

		}

		?>

	</div>

</div>
