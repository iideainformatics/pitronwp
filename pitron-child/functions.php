<?php 

add_action( 'wp_enqueue_scripts', 'soltrin_child_enqueue_styles', 99); // Set a higher priority to ensure it loads after other stylesheets

function soltrin_child_enqueue_styles() {

    // Enqueue the parent theme's stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Enqueue the child theme's stylesheet
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ),);


}
?>
