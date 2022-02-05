<?php 

function adswise_files() { // here load css/js files
    wp_enqueue_style('adswise_main_styles', get_stylesheet_uri()); //name of css stylesheet, location fo the file (here funct bc default css)
}

//function that does different things, depending on arguments
add_action('wp_enqueue_scripts', 'adswise_files'); // load some css/js files, name of the function