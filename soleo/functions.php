<?php 

function soleo_files(){
    

    wp_enqueue_style('styles',get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('images',get_theme_file_uri('/images'));
    wp_enqueue_style('js',get_theme_file_uri('/js/bootstrap.js'));
    wp_enqueue_style('soleo_files',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','soleo_files');