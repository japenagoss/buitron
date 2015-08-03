<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */

get_header();?>

<div id="carousel-news" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-news" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            hola 1
        </div>
        <div class="item">
            hola 2
        </div>
    </div>

    <a class="prev-new" href="#carousel-news" role="button" data-slide="prev">
        <span></span>
    </a>
    <a class="next-new" href="#carousel-news" role="button" data-slide="next">
        <span></span>
    </a>
</div>


<?php get_footer();?>