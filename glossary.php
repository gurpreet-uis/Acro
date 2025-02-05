<?php
// add custom post type - classes
function glosarryRegister(){

    $singular = 'Glossary';
    $plural = 'Glossaries';
    $posttype = 'glossaries';

    $labels = array(
        'name' => _x($plural, 'post type general name'),
        'singular_name' => _x($singular, 'post type singular name'),
        'add_new' => _x('Add New', strtolower($singular)),
        'add_new_item' => __('Add New '.$singular),
        'edit_item' => __('Edit '.$singular),
        'new_item' => __('New '.$singular),
        'view_item' => __('View '.$singular),
        'search_items' => __('Search '.$plural),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'voip-glossary'),
        'show_in_nav_menus' => true,
        'has_archive' => false,
        'show_in_rest'       => true,
        'menu_icon'   => 'dashicons-welcome-learn-more',
    );

    register_post_type($posttype , $args);

}
add_action('init', 'glosarryRegister');

add_action( 'template_redirect', 'acro_redirect_gloassary_post_type', 9 );

function acro_redirect_gloassary_post_type(){
    global $wp;
    $url = home_url( $wp->request );
    if (strpos($url, '/glossary/') === false) {
        return;
    }
    $url = str_replace('/glossary/', '/voip-glossary/', $url);
    wp_redirect( $url, 301 );
    exit;
}

// add custom taxonomy - class_type
// function classtype_taxonomies() {

//     $singular = 'Type';
//     $plural = 'Types';
//     $taxterm = 'class_type';

//     register_taxonomy($taxterm, 'classes', array(
//         'hierarchical' => true,
//         'show_in_rest' => true,
//         'labels' => array(
//             'name' => _x( $plural, 'taxonomy general name' ),
//             'singular_name' => _x( $singular, 'taxonomy singular name' ),
//             'search_items' =>  __( 'Search '.$plural ),
//             'all_items' => __( 'All '.$plural ),
//             'parent_item' => __( 'Parent '.$singular ),
//             'parent_item_colon' => __( 'Parent '.$singular.':' ),
//             'edit_item' => __( 'Edit '.$singular ),
//             'update_item' => __( 'Update '.$singular ),
//             'add_new_item' => __( 'Add New '.$singular ),
//             'new_item_name' => __( 'New '.$singular.' Name' ),
//             'menu_name' => __( $plural ),
//         ),
//         'rewrite' => array(
//             'slug' => $taxterm,
//             'with_front' => false,
//             'hierarchical' => true,
//         ),
//     ));
// }
// add_action( 'init', 'classtype_taxonomies', 0 );

?>