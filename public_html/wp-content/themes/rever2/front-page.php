<?php

require_once TEMPLATEPATH . '/library/vendor/facebook/php-sdk/src/facebook.php';

date_default_timezone_set('America/Denver');

$facebook = new Facebook(array(
    'appId'  => '218413825023459',
    'secret' => '30b81bf1a36cb24fdff3291037071c8a'
));

$facebook->getAccessToken();
$response = $facebook->api(
    '/myrever/events?fields=name,location,start_time'
);

$facebookEvents = array();
if (!empty($response['data'])) {
    $facebookEvents = array_reverse($response['data']);
}

get_header();
get_template_part('loops/slider');
get_sidebar('homepage');
get_template_part('loops/upcoming-events');
get_template_part('loops/latest-posts');
get_footer();