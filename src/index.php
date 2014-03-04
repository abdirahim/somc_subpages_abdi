<?php
/*
Plugin Name: SOMC Subpages  
Plugin URI: https://github.com/abdirahim
Description: Displays all subpages of the page it is placed on
Version: 0.1
Author: Abdirahim Mahamoud
Author URI: https://github.com/abdirahim
*/

// include() or require() any necessary files here...
include_once('includes/somc_widget.php');

function somc_add_js_to_doc_head() {
    $src = plugins_url('/includes/somc_js.js', __FILE__);
    wp_register_script('somc_js', $src );
    wp_enqueue_script( 'somc_js' );
}

function somc_add_css_to_doc_head() {
    $src = plugins_url('/includes/somc_css.css', __FILE__);
    wp_register_style('somc_css', $src );
    wp_enqueue_style( 'somc_css' );
}

// Tie into WordPress Hooks and any functions that should run on load.
add_action('init','somc_add_js_to_doc_head');

add_action('init','somc_add_css_to_doc_head');
// Tie into WordPress Hooks and any functions that should run on load.
add_action('widgets_init', 'SOMC_widget::register_this_widget');
/* EOF */