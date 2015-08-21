<?php 
$company_labels      = array(
    'name'               => __( "Información de empresa", 'buitron' ),
    'singular_name'      => __( 'Empresa', 'buitron' ),
    'menu_name'          => __( "Empresa",  'buitron' ),
    'name_admin_bar'     => __( 'Empresa', 'buitron' ),
    'add_new'            => __( 'Añadir nueva', 'buitron' ),
    'add_new_item'       => __( 'Añadir nueva información', 'buitron' ),
    'new_item'           => __( 'Nueva información', 'buitron' ),
    'edit_item'          => __( 'Editar información', 'buitron' ),
    'view_item'          => __( 'Ver información', 'buitron' ),
    'all_items'          => __( 'Toda la información', 'buitron' ),
    'search_items'       => __( 'Buscar información', 'buitron' ),
    'parent_item_colon'  => __( 'Información padre:', 'buitron' ),
    'not_found'          => __( 'No se encontró información.', 'buitron' ),
    'not_found_in_trash' => __( 'No se encontró información en la papelera.', 'buitron')
); 

$company_args = array(
    'labels'             => $company_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title'),
    'menu_icon'          => BUITRON_URL.'/images/company_gear.png' ,
    'rewrite'            => array('slug' => __('empresa','buitron')),
);

register_post_type('company', $company_args);

/* Create mata boxes */
require BUITRON_DIRECTORY.'/admin/metaboxes/company.php';