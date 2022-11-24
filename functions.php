<?php 


function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style( 'bootstrap' );

    wp_enqueue_style('my-main-style', get_stylesheet_uri(), false, '20150320');
}

add_action( 'wp_enqueue_scripts', 'load_css' );

function load_js()
{

    wp_enqueue_script( 'jquery' );

    wp_register_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );

    wp_enqueue_script( 'bootstrapjs' );
}

add_action( 'wp_enqueue_scripts', 'load_js' );