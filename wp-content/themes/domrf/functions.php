<?php
    add_action( 'wp_enqueue_scripts', function() {
        // css
        wp_enqueue_style( 'optimize-1', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/css/optimize.css');
        wp_enqueue_style( 'optimize-2', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/css/optimize_2.css');
        wp_enqueue_style( 'optimize-3', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/css/optimize_3.css');
        wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . './assets/wp-content/themes/super_dom/css/jquery.fancybox.min.css');

        // css
        wp_enqueue_style( 'fonts', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/css/fonts.css');
        wp_enqueue_style( 'style', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/css/style.css');
        wp_enqueue_style( 'remaster', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/css/remaster_style.css');
        wp_enqueue_style( 'adaptive', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/css/adaptive.css');
        
        // wp_deregister_script('jquery-core');
        // wp_register_script('jquery-core', './assets/wp-includes/js/jquery/jquery.min.js');
        // wp_enqueue_script('jquery');

        // js
        wp_enqueue_script( 'jquery', get_template_directory_uri() . './assets/wp-includes/js/jquery/jquery.min.js', array(), 'null', true );
        wp_enqueue_script( 'lazylines-line', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/js/lazylines_line_settings.js', array(), 'null', true );
        wp_enqueue_script( 'lazylines', get_template_directory_uri() . './assets/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js', array(), 'null', true );
        wp_enqueue_script( 'autoptimize-js-one', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/js/autoptimize_a5c2c7eccaaf024e87887d0e01493a8b.js', array(), 'null', true );
        wp_enqueue_script( 'autoptimize-js-two', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/js/autoptimize_ce004ddb1a71a4a74bacb7415d32d018.js', array(), 'null', true );



        wp_enqueue_script( 'empolyes-slider', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/js/empolyes_slider.js', array(), 'null', true );
        wp_enqueue_script( 'portfolio-slider', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/js/portfolio_slider.js', array(), 'null', true );
        wp_enqueue_script( 'reviews-slider', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/js/reviews_slider.js', array(), 'null', true );
        wp_enqueue_script( 'six-steps-slider-script', get_template_directory_uri() . './assets/wp-content/cache/autoptimize/js/six_steps_slider.js', array(), 'null', true );
    });

    // meta tags 
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
?>