<?php
$products_labels      = array(
    'name'               => __( "Productos", 'buitron' ),
    'singular_name'      => __( 'Productos', 'buitron' ),
    'menu_name'          => __( "Productos",  'buitron' ),
    'name_admin_bar'     => __( 'Productos', 'buitron' ),
    'add_new'            => __( 'Añadir nuevo', 'buitron' ),
    'add_new_item'       => __( 'Añadir nuevo producto', 'buitron' ),
    'new_item'           => __( 'Nuevo producto', 'buitron' ),
    'edit_item'          => __( 'Editar producto', 'buitron' ),
    'view_item'          => __( 'Ver producto', 'buitron' ),
    'all_items'          => __( 'Todos los productos', 'buitron' ),
    'search_items'       => __( 'Buscar productos', 'buitron' ),
    'parent_item_colon'  => __( 'Padre de productos:', 'buitron' ),
    'not_found'          => __( 'No se encontraron productos.', 'buitron' ),
    'not_found_in_trash' => __( 'No se encontraron productos en la papelera.', 'buitron')
); 

$products_args = array(
    'labels'             => $products_labels ,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 13,
    'supports'           => array('title', 'thumbnail','excerpt'),
    'menu_icon'          => BUITRON_URL.'/images/product_193.png' 
);

register_post_type('products', $products_args);

/* --------------------------------------------------------------------------- */
/* Create taxonomy ptoduct type for products */
$product_type_labels = array(
    'name'              => __( 'Tipo de productos', 'buitron'),
    'singular_name'     => __( 'Tipo de producto', 'buitron'),
    'search_items'      => __( 'Buscar tipos de productos', 'buitron'),
    'all_items'         => __( 'Todos los tipos de productos', 'buitron'),
    'parent_item'       => __( 'Padre tipo de producto', 'buitron'),
    'parent_item_colon' => __( 'Padre tipo de producto:', 'buitron'),
    'edit_item'         => __( 'Editar tipo de producto', 'buitron'),
    'update_item'       => __( 'Actualizar tipo de producto', 'buitron'),
    'add_new_item'      => __( 'Añadir nuevo tipo de producto', 'buitron'),
    'new_item_name'     => __( 'Nombre del nuevo tipo de producto', 'buitron'),
    'menu_name'         => __( 'Tipo de productos', 'buitron'),
);

$product_type_args   = array(
    'hierarchical'      => true,
    'labels'            => $product_type_labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true
);

register_taxonomy('product_type', 'products', $product_type_args);

/* --------------------------------------------------------------------------- */
/* Create mata boxes */
require BUITRON_DIRECTORY.'/admin/metaboxes/products.php';
