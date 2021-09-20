<?php

function mybootstrap_enqueue_styles() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('mybootstrap-style', get_stylesheet_uri(), $dependencies);
}

function mybootstrap_enqueue_scripts() {
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js', [], '5.1.1');
}

add_action( 'wp_enqueue_scripts', 'mybootstrap_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'mybootstrap_enqueue_scripts' );
add_theme_support('post-thumbnails');
register_nav_menu('header-menu', 'ヘッダーメニュー');

?>
