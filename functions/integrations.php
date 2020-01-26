<?php

/**
 * Integrations with some plugins
 * 
 */

// --- Contact Form 7 ---

// Load CSS & JS only when needed
// https://contactform7.com/loading-javascript-and-stylesheet-only-when-it-is-necessary/
// https://orbitingweb.com/blog/prevent-cf7-from-loading-css-js/

function sb_cf7_styles_scripts(){

    if ( function_exists( 'wpcf7_enqueue_scripts' )) {

        wp_dequeue_script('contact-form-7');
        wp_dequeue_style('contact-form-7');

        if ( is_page( array('contatti', 'contacts'))) {

            wp_enqueue_script('contact-form-7');
            wp_enqueue_style('contact-form-7');

        }

    }

}

add_action('wp_enqueue_scripts', 'sb_cf7_styles_scripts' ); 