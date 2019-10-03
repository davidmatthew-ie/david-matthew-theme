<?php
/**
 * The template for displaying all pages.
 *
 * @package David_Matthew_IE
 */

get_header();
?>

<div id="primary" class="content-area">
    
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'partials/content', 'page' );

        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile;
    ?>

    </main>

</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
