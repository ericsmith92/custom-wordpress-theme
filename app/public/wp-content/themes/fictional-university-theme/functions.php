<?php 

function university_files(){
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'),
                                                                                    NULL,
                                                                                    microtime(),
                                                                                    true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(),
                                                                NULL,
                                                                microtime());
}

//hook into wp_enqueue-scripts
//when this happens, call our function and enqueue our own scripts
//and styles
add_action('wp_enqueue_scripts', 'university_files');

function university_features(){
    //register nav menues
    //two arguments, the first is a made up name for menu location, no spaces
    //second atgument is more redable name that will appear in admin area
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

//hook into after_setup_theme event and register custom nav menu
add_action('after_setup_theme', 'university_features');

?>