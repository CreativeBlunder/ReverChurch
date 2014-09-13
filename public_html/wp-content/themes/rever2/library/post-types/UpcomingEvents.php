<?php

// Setup Post Type
$upcomingEventOptions = array(
    'menu_icon' => 'dashicons-calendar',
    'supports'  => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array()
);

$upcomingEvents = new BlunderPostType('Event', 'Events', 'upcoming-events', $upcomingEventOptions);

// Setup Custom Fields
$eventDetails = array(
    'id'       => 'event_details',
    'title'    => 'Event Details',
    'page'     => 'upcoming-events',
    'context'  => 'normal',
    'priority' => 'high',
    'fields'   => array(
        array(
            'name' => 'Event Start',
            'desc' => 'Date and time that event starts',
            'id'   => 'start',
            'type' => 'datetime',
            'std'  => ''
        ),
        array(
            'name' => 'Event End',
            'desc' => 'Date and time that event ends',
            'id'   => 'end',
            'type' => 'datetime',
            'std'  => ''
        ),
        array(
            'name' => 'Event Location',
            'desc' => 'Where the event is happening',
            'id'   => 'location',
            'type' => 'text',
            'std'  => 'Rêver Church'
        )
    )
);

$customEventFields = new BlunderMetaBox('event_', $eventDetails);