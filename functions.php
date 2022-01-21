<?php
function innocloud_register_stylesheet() {
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("roboto-font", "https://fonts.googleapis.com/css?family=Roboto:400,300,500,100");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css");
}
add_action("wp_enqueue_scripts", "innocloud_register_stylesheet");

function innocloud_register_menu_locations() {
    register_nav_menu("header-menu-location", "Header Menu Location");
}
add_action("after_setup_theme", "innocloud_register_menu_locations");

function innocloud_setup_custom_logo() {
    $config = array(
        "height" => 200,
        "width" => 200
    );
    add_theme_support("custom-logo", $config);
}
add_action("after_setup_theme", "innocloud_setup_custom_logo");