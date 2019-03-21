<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'OceanWP' for the Ocean theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    //linker til modertemaet style.css fil 
    //enqueue tilføjer 'stylen'
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>
