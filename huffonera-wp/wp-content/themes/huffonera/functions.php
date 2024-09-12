<?php

function director_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('custom-logo');

}

add_action('after_theme_setup', 'director_theme_support');

function director_featured_image_setup() { 
    add_theme_support( 'post-thumbnails' ); 
}

add_action( 'after_setup_theme', 'director_featured_image_setup' );

function director_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Desktop Footer Items"
    );
    register_nav_menus($locations);

}


add_action('init', 'director_menus');

function director_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('director_style', get_template_directory_uri() . "/style.css", array('director_bootstrap'), $version, 'all');
    wp_enqueue_style('director_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('director_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'director_register_styles');

function director_register_scripts(){

    wp_enqueue_script('director_jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('director_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('director_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('director_main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'director_register_scripts');

function director_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar widget area',
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer widget area',
        )
    );

}

add_action('widgets_init', 'director_widget_areas');


?>