<?php
/**
 * The template for displaying company information
 *
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */

get_header(); ?>

<div>
    <?php
    while (have_posts()) : the_post();
        get_template_part('content', 'company');
    endwhile;
    ?>
</div>

<?php get_footer(); ?>