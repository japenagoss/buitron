<?php 
/**
 * File for front settings. 
 * Load styles and js.
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Buitron 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 * @uses get_bloginfo()
 * @uses is_home()
 * @uses is_front_page()
 */
function btr_title($title,$sep){
    global $paged, $page;

    if(is_feed())
        return $title;

    // Add the site name.
    $title .= get_bloginfo('name', 'display');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'buitron' ), max( $paged, $page ));

    return $title;
}
add_filter('wp_title','btr_title',10,2);