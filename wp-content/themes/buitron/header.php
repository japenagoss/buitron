<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <header class="main_header">
        <div class="container_logo">
            <?php $logo = get_option("btr_header_logo");?> 
            
            <?php if(empty(!$logo)):?>
                <a href="<?php echo get_bloginfo("url");?>">
                    <img src="<?php echo $logo;?>">
                </a>
            <?php endif;?>
        </div>

        <?php 
            wp_nav_menu(
                array(
                'theme_location'    => 'buitron',
                'container'         => 'nav',
                'container_class'   => 'container_menu'
                )
            );
        ?>      
    </header>
    
    <div class="generic-container">