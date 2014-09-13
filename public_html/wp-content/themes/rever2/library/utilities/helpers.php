<?php

if (!function_exists('blunder_limit_words')) {
    function blunder_limit_words($content, $length = 20, $addon = '...')
    {
        $words = explode(' ', $content);
        $wordsNew = implode(' ', array_slice($words, 0, $length));

        if (strlen($wordsNew) < strlen($content)) {
            $wordsNew .= $addon;
        }

        return $wordsNew;
    }
}

if (!function_exists('blunder_excerpt')) {
    function blunder_excerpt($content, $length = 20, $addon = '...')
    {
        return blunder_limit_words(strip_tags($content), $length, $addon);
    }
}

if (!function_exists('blunder_plupload_action')) {
    function blunder_plupload_action()
    {
        // check ajax noonce
        $imgid = $_POST["imgid"];
        check_ajax_referer($imgid . 'pluploadan');
         
        // handle file upload
        $status = wp_handle_upload($_FILES[$imgid . 'async-upload'], array('test_form' => true, 'action' => 'plupload_action'));
         
        // send the uploaded file url in response
        echo $status['url'];
        exit;
    }
    add_action('wp_ajax_plupload_action', "blunder_plupload_action"); 
}