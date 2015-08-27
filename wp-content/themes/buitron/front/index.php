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

/**
 * Enqueue scripts and styles for front-end.
 *
 * @since Buitron 1.0
 * @uses wp_enqueue_script()
 */
function btr_scripts_styles(){
    $data_js = array(
        'is_home'       => is_home(),
        'is_company'    => is_post_type_archive("company")
    );

    wp_enqueue_script('bootstrap', BUITRON_BOOTRAP_URL.'/dist/js/bootstrap.min.js', array('jquery'), '3.3.5', false);
    wp_enqueue_script('matchheight', BUITRON_DIST_URL.'/js/jquery.matchHeight-min.js', array('jquery'), '0.5.2', false);
    wp_enqueue_script('modernizr', BUITRON_DIST_URL.'/js/modernizr.custom.js', array(), '1.0', false);
    wp_enqueue_script('custom', BUITRON_DIST_URL.'/js/custom.js', array('jquery','matchheight','modernizr'), '1.0', false);
    wp_localize_script("custom","data_js",$data_js);

    wp_enqueue_style('bootstrap', BUITRON_BOOTRAP_URL.'/dist/css/bootstrap.min.css', array(), null );
    wp_enqueue_style('styles', BUITRON_DIST_URL.'/css/styles.min.css', array(), null );
    wp_enqueue_style('lato_font', 'http://fonts.googleapis.com/css?family=Lato:400,100,300,100italic,300italic,400italic,700,700italic,900,900italic');
    wp_enqueue_style('merriweather_font', 'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,700,400italic,700italic,900,900italic');
}
add_action('wp_enqueue_scripts', 'btr_scripts_styles');


/**
 * return image with size according to the screen resolution
 *
 * @since Buitron 1.0
 */
function btr_images($url){
    global $wpdb;
    $image = "";

    $attachment = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT ID FROM $wpdb->posts WHERE guid = '%s'",
            $url
        ) 
    );

    if($wpdb->num_rows > 0){
        if(is_mobile()){
            $image = wp_get_attachment_image_src($attachment->ID, "mobile_bg_banner");
            $image = $image[0];
        }
        elseif(is_tablet()){
            $image = wp_get_attachment_image_src($attachment->ID, "tablet_bg_banner");
            $image = $image[0];
        }
        elseif(!is_mobile() && !is_tablet()){
            $image = wp_get_attachment_image_src($attachment->ID, "full");
            $image = $image[0];
        }
    }
    
    return $image;
}