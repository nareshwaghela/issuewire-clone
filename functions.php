<?php
// Theme Setup
function issuewire_clone_setup() {
    // Add Title Tag support
    add_theme_support('title-tag');
    // Add Featured Image support
    add_theme_support('post-thumbnails');
    // Register Main Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'issuewire-clone'),
    ));
}
add_action('after_setup_theme', 'issuewire_clone_setup');

// Register Sidebar (Widgets)
function issuewire_clone_widgets() {
    register_sidebar(array(
        'name'          => __('Right Sidebar', 'issuewire-clone'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
    ));
}
add_action('widgets_init', 'issuewire_clone_widgets');
?>
