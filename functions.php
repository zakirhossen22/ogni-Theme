<?php



add_theme_support( 'title-tag' );
function ogni_setup(){

     
       load_theme_textdomain('ogni');
       register_nav_menus(array(
              'main-menu'=> __('Main menu', 'ogni')
       ));
       
}
add_action( 'after_setup_theme', 'ogni_setup');

function ogni_scripts() {

       wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'fontawsome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'elegant', get_template_directory_uri() . '/assets/css/elegant-icons.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'nice', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'jquery', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'cario', 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap', array(), '1.0.0', 'all');


       wp_enqueue_script( 'min', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'nice', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array(), '1.0.0', true);
       wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
   }
   add_action( 'wp_enqueue_scripts', 'ogni_scripts' );
   