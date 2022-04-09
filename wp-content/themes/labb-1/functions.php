


<?php

 function initStyleScript(){
     wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
     wp_register_style('faCss', get_template_directory_uri().'/css/font-awesome.css');
     wp_register_style('myCss', get_template_directory_uri().'/style.css', 99);
    wp_enqueue_style('bootstrap'); 
    wp_enqueue_style('myCss');
    wp_enqueue_style('faCss');
   
    wp_enqueue_script('jsFile', get_template_directory_uri().'/js/jquery.js', array());
    wp_enqueue_script('scriptFile', get_template_directory_uri().'/js/script.js', array());
}
 


add_action( 'wp_enqueue_scripts', 'initStyleScript' );



add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');
//add_theme_support('title-tag');

add_action('after_setup_theme', 'getTheRightMenu');

function getTheRightMenu(){
    register_nav_menu('mainMenu', 'mainMenu');
    register_nav_menu('social-menu', 'social-menu');
}

function some_name(){
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'some_name' );


//add_filter( 'wp_title', 'fep_pre_get_document_title', 99 );

?>