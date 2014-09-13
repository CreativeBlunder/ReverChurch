<?php

if (function_exists('register_sidebar')) {
    register_sidebar(array('name' => 'Homepage', 'id' => 'homepagesidebar',  'before_widget' => '<div class="col-md-4"><div class="widget">', 'after_widget' => '</div></div>', 'before_title' => '<h3>', 'after_title' => '</h3>'));
    register_sidebar(array('name' => 'Footer', 'id' => 'footersidebar',  'before_widget' => '<div class="col-md-3"><div class="widget">', 'after_widget' => '</div></div>', 'before_title' => '<h3>', 'after_title' => '</h3>'));
    register_sidebar(array('name' => 'Page Sidebar', 'id' => 'pagesidebar',  'before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>'));
    register_sidebar(array('name' => 'Blog Sidebar', 'id' => 'blogsidebar',  'before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>'));
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('slider', 900, 410, true);
    add_image_size('single', 900, 410, true);
}

function posts_link_attributes()
{
    return 'class="btn btn-success"';
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');