<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="news-nav">
    <div class="news-logo">Issue<span>Wire</span></div>
    <ul class="nav-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/about">About</a></li>
        <?php 
            // Dynamic menu from WP Admin
            wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s')); 
        ?>
        <li><a href="/submit" class="btn-submit-pr">Submit Press Release</a></li>
    </ul>
</div>
