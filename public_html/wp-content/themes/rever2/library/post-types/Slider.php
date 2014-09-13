<?php

// Setup Post Type
$sliderOptions = array(
    'menu_icon' => 'dashicons-format-gallery',
    'supports'  => array('title'),
    'taxonomies' => array()
);

$upcomingEvents = new BlunderPostType('Slide', 'Slides', 'slides', $sliderOptions);

// Setup Custom Fields
$slideInformation = array(
    'id'       => 'slide_information',
    'title'    => 'Slide Information',
    'page'     => 'slides',
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'name' => 'Slide Background',
            'id'   => 'background',
            'type' => 'upload'
        ),
        array(
            'name' => 'Slide Content',
            'desc' => 'Text content of the slide',
            'id'   => 'content',
            'type' => 'textarea',
            'std'  => ''
        ),
        array(
            'name' => 'Slide Link',
            'desc' => 'Page/Url to link slide to.',
            'id'   => 'link',
            'type' => 'text',
            'std'  => ''
        )
    )
);

$customSlideFields = new BlunderMetaBox('slide_', $slideInformation);