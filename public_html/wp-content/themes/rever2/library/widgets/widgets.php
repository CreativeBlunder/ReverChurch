<?php

$blunderWidgets = array(
    'Custom_Text'
);

foreach ($blunderWidgets as $blunderWidget) {
    require_once $blunderWidget . '.php';
}

function blunder_load_widgets()
{
    global $blunderWidgets;

    foreach ($blunderWidgets as $blunderWidget) {
        register_widget($blunderWidget);
    }
}
add_action('widgets_init', 'blunder_load_widgets');

function blunder_remove_widgets()
{
    if (function_exists('unregister_widget')) {
        unregister_widget('WP_Widget_Calendar');
        unregister_widget('WP_Widget_Links');
        unregister_widget('WP_Widget_Pages');
        unregister_widget('WP_Widget_Recent_Comments');
        unregister_widget('WP_Widget_Search');
        unregister_widget('WP_Widget_RSS');
        // unregister_widget('WP_Widget_Text');
    }
}
add_action('widgets_init', 'blunder_remove_widgets');

add_filter('widget_text', 'do_shortcode');