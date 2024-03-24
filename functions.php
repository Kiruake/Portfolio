<?php 

function register_my_menu(){
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tete'),
        'footer-menu'  => __( 'Menu De Pied'),
    ) );
}
add_action( 'init', 'register_my_menu', 0 );


// Ajoute une taille personnalisée pour les miniatures
add_image_size('custom-thumbnail', 400, 400, true);


add_theme_support( 'post-thumbnails' );

add_theme_support( 'title-tag' );



