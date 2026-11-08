<?php
// Raheema Theme - functions.php - Raheema Tauqeer

// 1. Enqueue Assets - Action Hook
function raheema_enqueue_assets() {
    wp_enqueue_style('raheema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'raheema_enqueue_assets');

// 2. Theme Setup - Action Hook
function raheema_setup_theme() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'raheema_setup_theme');

// 3. Register Menus - Action Hook
function raheema_register_menus() {
    register_nav_menus(array('primary' => 'Primary Menu'));
}
add_action('after_setup_theme', 'raheema_register_menus');

// 4. Custom Footer - Action Hook
function raheema_custom_footer() {
    echo '<p>Designed by Raheema Tauqeer</p>';
}
add_action('wp_footer', 'raheema_custom_footer');

// 5. Dashboard Widget - Action Hook
function raheema_add_dashboard_widget() {
    wp_add_dashboard_widget('raheema_widget', 'Raheema Project', 'raheema_widget_display');
}
function raheema_widget_display() { echo 'Welcome to Raheema Theme!'; }
add_action('wp_dashboard_setup', 'raheema_add_dashboard_widget');

// Filter 1 - Excerpt Length
function raheema_excerpt_length($length) { return 40; }
add_filter('excerpt_length', 'raheema_excerpt_length');

// Filter 2 - Custom Title
function raheema_custom_title($title) { return $title . ' | Raheema'; }
add_filter('the_title', 'raheema_custom_title');

// Filter 3 - Body Class
function raheema_body_class($classes) { $classes[] = 'raheema-theme'; return $classes; }
add_filter('body_class', 'raheema_body_class');

// Custom User Role - project_manager
function raheema_add_project_manager_role() {
    add_role('project_manager', 'Project Manager', array(
        'read' => true,
        'edit_posts' => true,
        'publish_posts' => true,
        'upload_files' => true,
        'edit_pages' => true,
    ));
}
add_action('init', 'raheema_add_project_manager_role');
