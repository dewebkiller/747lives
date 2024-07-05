<?php

/**
 * The function `theme_setup` adds support for the title tag in a WordPress theme.
 */
function theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup' );

add_theme_support('post-thumbnails');
add_image_size('banner', 1350, 500, true);
add_image_size('dewebkiller', 830, 340, true);
add_image_size('admin-thumbnail', 50, 50, true);
add_image_size('dwk_service', 700, 480, true);
add_image_size('team', 500, 500, true);

//require_once('wp_bootstrap_navwalker.php');
/* ---- Register Menus ---- */

function register_glasseye_menus() {
    register_nav_menus(
            array(
                
                'primary' => __('Main Menu'),
                'footer-menu' => __('Footer Menu'),
            )
    );
}

add_action('init', 'register_glasseye_menus');

//Include external files
require_once(TEMPLATEPATH . '/inc/enqueues.php');

