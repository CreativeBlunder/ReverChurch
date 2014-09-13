<?php

$themeOptions = array(
    array('name' => $themeName . ' Options', 'type' => 'title'),
    array('name' => 'Contact Information', 'type' => 'section'),
    array('type' => 'open'),
    array(
        'name'        => 'Email Address',
        'description' => 'Enter your primary email address for contact requests.',
        'id'          => $shortName . '_email_address',
        'type'        => 'text',
        'default'     => ''
    ),
    array(
        'name'        => 'Telephone',
        'description' => 'Enter your primary telephone number.',
        'id'          => $shortName . '_telephone',
        'type'        => 'text',
        'default'     => ''
    ),
    array(
        'name'        => 'Address',
        'description' => 'Enter your main contact address.',
        'id'          => $shortName . '_address',
        'type'        => 'textarea',
        'default'     => ''
    ),
    array('type' => 'close'),
    array('name' => 'Social Media', 'type' => 'section'),
    array('type' => 'open'),
    array(
        'name'        => 'Facebook',
        'description' => 'Enter the url to your facebook profile.',
        'id'          => $shortName . '_facebook_url',
        'type'        => 'text',
        'default'     => ''
    ),
    array(
        'name'        => 'Twitter',
        'description' => 'Enter the url to your twitter profile.',
        'id'          => $shortName . '_twitter_url',
        'type'        => 'text',
        'default'     => ''
    ),
    array(
        'name'        => 'Twitter Username',
        'description' => 'Enter your twitter username.',
        'id'          => $shortName . '_twitter_username',
        'type'        => 'text',
        'default'     => ''
    ),
    array(
        'name'        => 'Flickr',
        'description' => 'Enter the url to your flickr profile.',
        'id'          => $shortName . '_flickr_url',
        'type'        => 'text',
        'default'     => ''
    ),
    array(
        'name'        => 'Mailchimp API Key',
        'description' => 'Enter the API key for your mailchimp account.',
        'id'          => $shortName . '_mailchimp_api_key',
        'type'        => 'text',
        'default'     => ''
    ),
    array(
        'name'        => 'Mailchimp List ID',
        'description' => 'Enter the List ID for your mailchimp account.',
        'id'          => $shortName . '_mailchimp_list_id',
        'type'        => 'text',
        'default'     => ''
    ),
    array('type' => 'close')
);

$adminOptions = new BlunderAdminPanel($themeName, $shortName, $themeOptions);