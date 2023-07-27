<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support( 'custom-logo' );
add_post_type_support('post', 'excerpt');
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}
function style_theme()
{
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'main_style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style( 'SourceSansPro_font', get_template_directory_uri() . '/assets/fonts/stylesheet.css');
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
}

function scripts_theme()
{
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.3.min.js');
    wp_enqueue_script('bootstrap_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js');
}
add_filter('use_block_editor_for_post', '__return_false', 10);


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
?>

