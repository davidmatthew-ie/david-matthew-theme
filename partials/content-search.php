<?php
/**
 * The partial for displaying results in search pages.
 *
 * @package David_Matthew_IE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
    <header class="entry-header">
		
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header>

	<div class="entry-summary">
		
        <?php the_excerpt(); ?>
	
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
