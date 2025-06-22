<?php
function mrt_enqueue_scripts() {
    wp_enqueue_style( 'mrt-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'mrt_enqueue_scripts' );

