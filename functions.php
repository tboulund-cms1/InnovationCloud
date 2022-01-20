<?php
function innocloud_register_stylesheet() {
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("roboto-font", "https://fonts.googleapis.com/css?family=Roboto:400,300,500,100");
}
add_action("wp_enqueue_scripts", "innocloud_register_stylesheet");