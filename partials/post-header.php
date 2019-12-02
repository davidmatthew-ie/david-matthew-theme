<?php
/**
 * The partial for displaying title headers.
 *
 * @package David_Matthew_IE
 */

?>

<header class="entry-header">

	<div class="header-content">

		<?php the_title( '<h1 class="entry-title animated fadeInDown">', '</h1>' ); ?>

		<span class="animated fadeInRight"><i class="fas fa-user"></i>Author: <?php the_author_meta( 'display_name' ); ?></span>

		<?php

		$date_string   = 'Published: ' . get_the_date( 'j M Y' );
		$original_time = get_the_time( 'U' );
		$modified_time = get_the_modified_time( 'U' );
		if ( $modified_time >= $original_time + 86400 ) {
			$date_string .= ' (Updated ' . get_the_modified_date( 'j M Y' ) . ')';
		}

		?>

		<span class="animated fadeInRight"><i class="fas fa-calendar-alt"></i><?php echo esc_html( $date_string ); ?></span>

		<span class="animated fadeInRight"><i class="fas fa-tags"></i><?php the_tags(); ?></span>

	</div>

</header>
