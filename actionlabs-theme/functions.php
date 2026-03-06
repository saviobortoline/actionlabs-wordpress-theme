<?php


add_theme_support('post-thumbnails');

function actionlabs_styles() {

    // CSS GLOBAL
    wp_enqueue_style(
        'actionlabs-global',
        get_template_directory_uri() . '/assets/css/global.css',
        [],
        '1.0'
    );

    // HOME
    if ( is_front_page() ) {
        wp_enqueue_style(
            'actionlabs-home',
            get_template_directory_uri() . '/assets/css/home.css',
            ['actionlabs-global'],
            '1.0'
        );
    }

    // POST INDIVIDUAL
    if ( is_single() ) {
        wp_enqueue_style(
            'actionlabs-single',
            get_template_directory_uri() . '/assets/css/single.css',
            ['actionlabs-global'],
            '1.0'
        );
    }

    // SOBRE NÓS
    if ( is_page('about') ) {
        wp_enqueue_style(
            'about-style',
            get_template_directory_uri() . '/assets/css/about.css'
        );
    }

}

add_action( 'wp_enqueue_scripts', 'actionlabs_styles' );