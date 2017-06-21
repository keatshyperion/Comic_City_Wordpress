<?php
require_once('bs4navwalker.php');
//Global variables
define('THEMEROOT', get_stylesheet_directory_uri());
    define('IMAGES', THEMEROOT . '/images');
    define('STYLES', THEMEROOT . '/css');
    define('SCRIPTS', THEMEROOT . '/js');
//ADD STYLES
function styles(){
        wp_enqueue_style('bootstrap', STYLES . '/bootstrap.min.css');
        wp_enqueue_style('style', THEMEROOT . '/style.css');
    }
        // WYWOŁYWANIE AKCJI
    add_action('wp_enqueue_scripts', 'styles');
 // ADD SCRIPTS
    function script(){
        // 'NAZWA', "NAZWA", array('ZALEŻNOŚĆ'), "WERSJA", CZY W STOPCE (BOOLEAN);
        wp_enqueue_script('custom', SCRIPTS . "/custom.js", array('jquery'),'1.0', false);
    }
    add_action('wp_enqueue_scripts', 'script');

//REGISTER MENU
function menu(){
    register_nav_menus(array(
        'mainMenu' => 'Główne menu'
    ));
}
add_action('init' , 'menu');


//ADD SERCH
function add_search_to_menu($items, $args){
    if ($args -> theme_location == "main-menu"){
        return $items . '<li class="search">
								<a href="#"><i class="fa fa-search"></i></a>
								<form action="' . get_site_url() .  '">
									<input type="text" name="s" placeholder="Wyszukaj...">
								</form>
							</li>';
        
    } return $items ;
}
add_filter('wp_nav_menu_items','add_search_to_menu', 10 , 2 );

//REGISTER SIDEBAR

register_sidebar(array( 
    'name' => 'Stopka-1',
    'id' => 'footer-1',
    'description' => 'Pierwsza kolumna stopki',
    'before_title' => '<h3>', 
    'after_title' => ' </h3>',
    'before_widget' => '<div class="footer-box"> ',
    'after_widget' => '</div> ',
 ) );


register_sidebar(array( 
    'name' => 'Stopka-2',
    'id' => 'footer-2',
    'description' => 'Druga kolumna stopki',
    'before_title' => '<h3>', 
    'after_title' => ' </h3>',
    'before_widget' => '<div class="footer-box"> ',
    'after_widget' => '</div> ',
 ) );
register_sidebar(array( 
    'name' => 'Stopka-3',
    'id' => 'footer-3',
    'description' => 'Trzecia kolumna stopki',
    'before_title' => '<h3>', 
    'after_title' => ' </h3>',
    'before_widget' => '<div class="footer-box social-buttons"> ',
    'after_widget' => '</div> ',
 ) );
 

register_sidebar(array( 
    'name' => 'Side_bar',
    'id' => 'sidebar',
    'description' => 'Wigdet',
    'before_title' => '<h3>', 
    'after_title' => ' </h3>',
    'before_widget' => '<div class="block"> ',
    'after_widget' => '</div> ',
 ) );

register_sidebar(array( 
    'name' => 'Nagłówek-1',
    'id' => 'naglowek_1',
    'description' => 'Tekst',
    'before_title' => '<h2>', 
    'after_title' => ' </h2>',
    'before_widget' => '<div class="info-box"> ',
    'after_widget' => '</div> ',
 ) );
register_sidebar(array( 
    'name' => 'Nagłówek-2',
    'id' => 'naglowek_2',
    'description' => 'Tekst',
    'before_title' => '<h2>', 
    'after_title' => ' </h2>',
    'before_widget' => '<div class="info-box"> ',
    'after_widget' => '</div> ',
 ) );
register_sidebar(array( 
    'name' => 'Nagłówek-3',
    'id' => 'naglowek_3',
    'description' => 'Tekst',
    'before_title' => '<h2>', 
    'after_title' => ' </h2>',
    'before_widget' => '<div class="info-box"> ',
    'after_widget' => '</div> ',
 ) );

?>
