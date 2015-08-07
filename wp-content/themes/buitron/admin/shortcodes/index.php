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
        'title'             => '',
        'image'             => '',
        'margin_title'      => '0px 0px 0px 0px',
        'margin_content'    => '0px 0px 0px 0px',
        'button'            => '',
        'button_link'       => '',
    ), $atts );

    $html  = '<section class="block_about_us">';
    $html .= '<h2 class="title" style="margin:'.$a['margin_title'].';">'.$a['title'].'</h2>';
    $html .= '<div class="content" style="margin:'.$a['margin_content'].';">'.$content;

    if(!empty($a['button'])){
        $html .= '<div class="button">';
        $html .= '<a href="'.$a['button_link'].'">';
        $html .= $a['button'];
        $html .= '</a>';
        $html .= '</div>';
    }
    
    $html .= '</div>';
    $html .= '<div class="image" style="background-image:url('.$a['image'].');"></div>';
    $html .= '</section>';

    return $html;
}
add_shortcode('btr_abouts', 'btr_abouts');