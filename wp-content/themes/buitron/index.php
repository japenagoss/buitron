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

<?php
/** 
 * This is a file for loading template for slides
 */
require BUITRON_DIRECTORY.'/front/parts/home/slide.php'; 
?>

<?php
/** 
 * This is a file for loading template for home info
 */
require BUITRON_DIRECTORY.'/front/parts/home/info.php'; 
?>

<?php
/** 
 * This is a file for loading template for services
 */
require BUITRON_DIRECTORY.'/front/parts/home/services.php'; 
?>



<?php get_footer();?>