<?php 
$home_slides_labels      = array(
    'name'               => __( "Home slide", 'buitron' ),
    'singular_name'      => __( 'Home slide', 'buitron' ),
    'menu_name'          => __( "Home slides",  'buitron' ),
    'name_admin_bar'     => __( 'Home slides', 'buitron' ),
    'add_new'            => __( 'Añadir nuevo', 'buitron' ),
    'add_new_item'       => __( 'Añadir nuevo slide', 'buitron' ),
    'new_item'           => __( 'Nuevo slide', 'buitron' ),
    'edit_item'          => __( 'Editar slide', 'buitron' ),
    'view_item'          => __( 'Ver slide', 'buitron' ),
    'all_items'          => __( 'Todos los slides', 'buitron' ),
    'search_items'       => __( 'Buscar slides', 'buitron' ),
    'parent_item_colon'  => __( 'Padre slides:', 'buitron' ),
    'not_found'          => __( 'No se encontraron slides.', 'buitron' ),
    'not_found_in_trash' => __( 'No se encontraron slides en la papelera.', 'buitron')
); 

$home_slides_args = array(
    'labels'             => $home_slides_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'thumbnail','excerpt'),
    'menu_icon'          => BUITRON_URL.'/images/icon_webstore.png' 
);

register_post_type('home_slides', $home_slides_args);

/* Create mata boxes */
require BUITRON_DIRECTORY.'/admin/metaboxes/home-slides.php';
