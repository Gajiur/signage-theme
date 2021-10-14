<?php
/**
 * Template Name: Ez landscape
 * Template Post Type: post, page, signage
 */

get_header();
?>
    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'notitle' );
                endwhile; // End of the loop.
            ?>
        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
