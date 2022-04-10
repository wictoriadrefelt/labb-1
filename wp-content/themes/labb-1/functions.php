


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

add_action('after_setup_theme', 'getMenu');

function getMenu(){
    register_nav_menu('mainMenu', 'mainMenu');
    register_nav_menu('sideMenuLeft', 'side-menu-left');
    register_nav_menu('sideMenuRight', 'side-menu-right');
    register_nav_menu('footerMenu', 'footerMenu');
}

function some_name(){
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'some_name' );


function forSideBars(){
register_sidebar(
    [
        'name' => 'mySideBar', 
        'id' => 'mySideBar',
        'description' => 'Widget to display side menu' 
        
    ]
    

); 

}


function forFooter(){
    register_sidebar(
        [
            'name' => 'myFooterWidget', 
            'id' => 'myFooterWidget',
            'description' => 'Widget for footer - About us',
            'before_widget' => '',
            'after_widget' => '',
            
        ]);
        register_sidebar(
        [
            'name' => 'myFooterWidget2', 
            'id' => 'myFooterWidget2',
            'description' => 'Widget for footer - Contact form',
            'before_widget' => '',
            'after_widget' => ''

        ]);
        register_sidebar(
            [
            'name' => 'myFooterWidget3', 
            'id' => 'myFooterWidget3',
            'description' => 'Widget for for footer - Social media icons' 
            ]
            );
     
    
    }

add_action('after_setup_theme', 'forSideBars');
add_action('after_setup_theme', 'forFooter');
?>