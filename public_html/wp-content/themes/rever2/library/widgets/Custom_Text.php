<?php

class Custom_Text extends WP_Widget {

    public function __construct()
    {
        global $shortName;

        $widgetOptions = array(
            'classname'   => $shortname,
            'description' => 'A basic text widget with clean html output.'
        );

        // Widget Control Settings
        $controlOptions = array(
            'height' => '500',
            'width'  => '430',
            'id_base' => $shortName . '-text'
        );

        // Create the widget
        parent::__construct($shortName . '-text', ucfirst($shortName) . ' Text', $widgetOptions, $controlOptions);
    }

    public function widget($args, $instance)
    {
        extract($args);

        // User Selected Settings
        $title = apply_filters('widget_title', $instance['title']);
        $content = $instance['content'];

        echo $before_widget;

        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        if (!empty($content)) {
            echo $content;
        }

        echo $after_widget;
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);
        $instance['content'] = $new_instance['content'];

        return $instance;
    }

    public function form($instance)
    {
        $defaults = array('title' => '', 'content' => '');
        $instance = wp_parse_args((array)$instance, $defaults);
        $title = strip_tags($instance['title']);
        $content = $instance['content'];

        ?>
        <p>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $title; ?>" placeholder="Title" type="text">
        </p>
        <p>
            <textarea class="widefat" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_id('content'); ?>" placeholder="Content" rows="16"><?php echo $content; ?></textarea>
        </p>
        <?php
    }

}
