<?php

$menus = array(
    array('name' => 'header_left', 'label' => 'Header Left'),
    array('name' => 'header_right', 'label' => 'Header Right')
);

function blunder_register_menus()
{
    global $menus;

    foreach ($menus as $menu) {
        register_nav_menu($menu['name'], __($menu['label']));
    }
}

add_action('init', 'blunder_register_menus');
add_theme_support('nav-menus');