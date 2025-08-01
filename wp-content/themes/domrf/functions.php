<?php
    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style( 'index-css', get_template_directory_uri() . '/assets/wp-content/cache/autoptimize/css/index.css');
        wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/wp-content/themes/super_dom/css/jquery.fancybox.min.css');



        // wp_enqueue_script( 'autoptimize-1', get_template_directory_uri() . '/assets/wp-content/cache/autoptimize/js/autoptimize_a5c2c7eccaaf024e87887d0e01493a8b.js', array(), '1.0.0', true );
        // wp_enqueue_script( 'autoptimize-2', get_template_directory_uri() . '/assets/wp-content/cache/autoptimize/js/autoptimize_ce004ddb1a71a4a74bacb7415d32d018.js', array(), '1.0.0', true );
        // wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/assets/wp-includes/js/jquery/jquery.min.js', array(), '1.0.0', true );
        // wp_enqueue_script( 'empolyes-slider', get_template_directory_uri() . '/assets/wp-content/cache/autoptimize/js/empolyes_slider.js', array(), '1.0.0', true );
        // wp_enqueue_script( 'portfolio-slider', get_template_directory_uri() . '/assets/wp-content/cache/autoptimize/js/portfolio_slider.js', array(), '1.0.0', true );
        // wp_enqueue_script( 'reviews-slider', get_template_directory_uri() . '/assets/wp-content/cache/autoptimize/js/reviews_slider.js', array(), '1.0.0', true );
        // wp_enqueue_script( 'six-steps-slider-script', get_template_directory_uri() . '/assets/wp-content/cache/autoptimize/js/six_steps_slider.js', array(), '1.0.0', true );
    });

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
?>