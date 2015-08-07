<?php
/**
 * Shortcode for block with information in about us
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
function btr_abouts($atts, $content = ""){
    $a = shortcode_atts(array(
        'title'     => '',
        'image'     => '',
    ), $atts );

    $html  = '<section class="block_about_us">';
    $html .= '<h2 class="title">'.$a['title'].'</h2>';
    $html .= '<div class="content">'.$content.'</div>';
    $html .= '<div class="image" style="background-image:url('.$a['image'].');"></div>';
    $html .= '<section>';

    return $html;
}
add_shortcode('btr_abouts', 'btr_abouts');