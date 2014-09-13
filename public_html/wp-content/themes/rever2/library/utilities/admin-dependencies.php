<?php

if (!function_exists('blunder_admin_styles')) {
    function blunder_admin_styles()
    {
        global $assetUrl;

        wp_enqueue_style('admin_css_datetime_picker', $assetUrl . 'jquery.datetimepicker.css', false, '1.0.0');
        wp_enqueue_style('admin_theme_css', $assetUrl . 'admin.css', false, '1.0.0');
    }
}

if (!function_exists('blunder_admin_scripts')) {
    function blunder_admin_scripts()
    {
        global $assetUrl;

        wp_enqueue_script('plupload-all');
        wp_enqueue_script('admin_js_datetime_picker', $assetUrl . 'jquery.datetimepicker.js', array(), '1.0.0', true);
        wp_enqueue_script('admin_theme_js', $assetUrl . 'admin.js', array(), '1.0.0', true);
    }
}

add_action('admin_enqueue_scripts', 'blunder_admin_styles');
add_action('admin_enqueue_scripts', 'blunder_admin_scripts');

function plupload_admin_head() {
    // place js config array for plupload
    $plupload_init = array(
        'runtimes' => 'html5,silverlight,flash,html4',
        'browse_button' => 'plupload-browse-button', // will be adjusted per uploader
        'container' => 'plupload-upload-ui', // will be adjusted per uploader
        'drop_element' => 'drag-drop-area', // will be adjusted per uploader
        'file_data_name' => 'async-upload', // will be adjusted per uploader
        'multiple_queues' => true,
        'max_file_size' => wp_max_upload_size() . 'b',
        'url' => admin_url('admin-ajax.php'),
        'flash_swf_url' => includes_url('js/plupload/plupload.flash.swf'),
        'silverlight_xap_url' => includes_url('js/plupload/plupload.silverlight.xap'),
        'filters' => array(array('title' => __('Allowed Files'), 'extensions' => '*')),
        'multipart' => true,
        'urlstream_upload' => true,
        'multi_selection' => false, // will be added per uploader
        // additional post data to send to our ajax hook
        'multipart_params' => array(
            '_ajax_nonce' => "", // will be added per uploader
            'action' => 'plupload_action', // the ajax action name
            'imgid' => 0 // will be added per uploader
        )
    );
    ?>
    <script type="text/javascript">
    var base_plupload_config=<?php echo json_encode($plupload_init); ?>;
    </script>
    <?php
}
add_action("admin_head", "plupload_admin_head");