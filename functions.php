<?php

function mybootstrap_enqueue_styles() {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('mybootstrap-style', get_stylesheet_uri(), $dependencies);
}

function mybootstrap_enqueue_scripts() {
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js');
    $dependencies = array('jquery', 'popper');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', $dependencies, '4.2.1', true);
}

add_action( 'wp_enqueue_scripts', 'mybootstrap_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'mybootstrap_enqueue_scripts' );
add_theme_support('post-thumbnails');
register_nav_menu('header-menu', 'ヘッダーメニュー');

?>
