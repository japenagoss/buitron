<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */

get_header(); ?>

<div>
    <?php
    while ( have_posts() ) : the_post();
        get_template_part('content', 'page');
    endwhile;
    ?>
</div>

<?php get_footer(); ?>
