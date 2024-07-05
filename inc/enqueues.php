
<?php

function lives747_enqueues() {
    
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), time());
    wp_enqueue_style('bootstrap');

    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.3.6');
    wp_enqueue_style('reset');

    wp_register_style('layout', get_template_directory_uri() . '/css/layout.css', array(), '1.3.6');
    wp_enqueue_style('layout');

    
    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0');
    wp_enqueue_style('responsive');

    wp_register_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.3.6');
    wp_enqueue_style('swiper');

    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '1.0');
    wp_enqueue_style('fontawesome');


    wp_register_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swa', false, '4.7.0', null);
    wp_enqueue_style('roboto');


    /* Scripts */

    wp_enqueue_script('jquery');
    /* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
      https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

    // wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null, true);
    // wp_enqueue_script('jquery');

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', false, null, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('owljs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', false, null, true);
    wp_enqueue_script('owljs');
    
    wp_register_script('waypoints',  get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, '4.0', true);
    wp_enqueue_script('waypoints');

    wp_register_script('wow',  get_template_directory_uri() . '/js/wow.min.js', false, '4.0', true);
    wp_enqueue_script('wow');

    wp_register_script('fancybox',  'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', false, '4.0', true);
    wp_enqueue_script('fancybox');

    wp_register_script('aosjs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false, null, true);
    wp_enqueue_script('aosjs');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', false, null, true);
    wp_enqueue_script('custom');
 
}

add_action('wp_enqueue_scripts', 'lives747_enqueues', 100);
