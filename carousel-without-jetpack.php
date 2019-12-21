<?php
/*
Plugin Name: Carousel Without Jetpack
Description: Display images and galleries in a gorgeous, full-screen browsing experience. Based on Lazy Images module, from Jetpack plugin, http://wordpress.org/plugins/jetpack/
Tags: gallery, carousel, diaporama, slideshow, images, lightbox, exif, metadata, image
Version: 1.0
Author: Nico Kaiser
*/

include dirname( __FILE__ ) . '/carousel/jetpack-carousel.php';

add_action( 'wp_loaded', function() {
    if ( ! wp_script_is( 'spin', 'registered' ) ) {
        wp_register_script(
            'spin',
            plugins_url( '_inc/build/spin.min.js', __FILE__ ),
            false,
            '1.3'
        );
    }

    if ( ! wp_script_is( 'jquery.spin', 'registered' ) ) {
        wp_register_script(
            'jquery.spin',
            plugins_url( '_inc/build/jquery.spin.min.js', __FILE__ ),
            array( 'jquery', 'spin' ),
            '1.3'
        );
    }
} );
