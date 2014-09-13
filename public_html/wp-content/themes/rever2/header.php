<?php
/**
 * @package WordPress
 * @subpackage Rêver_Responsive
 * @since Rêver Responsive 1.0
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo bloginfo('name'); ?> <?php wp_title('-', true, 'left'); ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700,800|Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/theme.css">

        <?php wp_head(); ?>
    </head>
    <body>
        <header name="top">
            <div class="top-links">
                <div class="container">
                    <?php get_template_part('partials/social'); ?>
                </div>
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation">Menu</span></button>
                        <a class="navbar-brand" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 23.2 960 514.9" style="enable-background:new 0 23.2 960 514.9;" xml:space="preserve">
                                <g>
                                    <path class="rever" d="M130.7 353.1c68.3-51.7 102.9-93.3 104-124.8c0-12.8-11.2-22.4-34.1-28.3c-39.5-6.9-99.2 0.5-178.7 22.4 c-8.5 1.6-16 5.9-21.9 13.3v4.3c36.8 51.2 55.5 104.5 55.5 160l-6.9 34.1h21.3l17.1 4.3c5.3-67.2-1.1-121.1-18.7-161.1 c-8-17.6-13.9-27.7-17.1-30.9c46.4-16.5 90.1-24 131.7-23.5c4.3 0.5 7.5 2.1 9.1 5.3c2.7 3.7 2.1 10.7-2.7 21.3l-14.4 22.9 c-28.3 31.5-56 56-83.2 73.6l1.1 10.1c4.8 10.7 13.3 22.4 25.1 34.1c11.7 12.3 33.6 27.7 65.1 46.4c32.5 4.8 46.4 4.3 42.1-1.1 C182.4 409.1 150.9 381.3 130.7 353.1L130.7 353.1z" />
                                    <path class="rever" d="M856 364.8c68.3-51.7 103.5-93.3 104-124.8c0-12.8-11.2-22.4-34.1-28.3c-39.5-6.9-99.2 0.5-178.7 22.4 c-7.5 1.6-13.9 5.3-19.7 10.7l-8-13.3c-4.8 6.9-28.3 18.1-71.5 33.1c-41.1 10.7-70.9 16.5-89.1 17.1c7.5-17.1 14.4-34.7 20.8-52.3 c8.5-24 13.3-48.5 13.9-74.1c0.5-19.7-2.7-39.5-9.1-59.7s-18.1-40.5-34.1-61.3c-2.7-2.7-5.3-5.3-8.5-7.5 c-4.8-3.2-10.1-4.3-14.9-3.2c-4.8 1.1-9.1 3.7-12.3 6.9c-3.2 3.7-4.8 8-4.8 12.8s2.1 9.1 6.9 12.8c2.1 1.6 4.8 2.7 7.5 3.2 c3.2 0.5 6.4 1.1 9.1 1.6c3.2 0.5 5.9 1.1 8.5 1.6c2.7 1.1 4.8 2.1 6.4 4.3c11.7 22.9 17.1 47.5 16 74.1 c-1.1 19.2-4.8 38.9-10.1 59.2s-12.3 41.1-20.3 61.9c-8 20.8-16 42.7-24.5 64.5c-8.5 21.9-16.5 44.3-22.9 67.2 c-5.9-16-11.7-34.1-17.1-53.9h0.5c1.6-9.1 0-15.5-5.3-19.2c-5.3-23.5-8.5-49.1-11.2-77.9c-1.1-6.4-3.2-10.1-6.4-12.3 c-3.7-2.1-7.5-2.7-11.2-1.1c-3.7 1.1-7.5 4.3-10.7 8.5c-3.2 4.3-4.3 9.6-4.3 16c1.1 19.7 3.7 42.7 8.5 68.8 c-56.5 8.5-101.3 22.4-133.9 42.1c-3.7-11.2-6.4-20.8-7.5-29.3l60.8-18.1c28.8-5.3 44.3-8.5 45.3-10.1v-1.6l-14.9-16.5 c-11.7-1.1-43.2 7.5-94.9 26.1l-1.6-1.1l-10.1-19.2v-3.2c51.7-4.3 97.6-18.7 137.6-42.7v-3.2l-15.5-26.1 c-4.8 6.9-28.3 18.1-71.5 33.1c-49.1 12.8-82.1 18.7-98.7 16.5l-0.5-1.1l-3.2 2.7v1.1v13.3v1.6l-2.1 2.1l2.1 8l15.5-1.6 c8.5 17.1 12.3 27.2 11.7 29.9v3.2c-8.5 2.7-12.8 4.8-12.8 5.9v1.6l12.3 10.1c7.5 0.5 9.6 19.7 7.5 56.5l-1.6 1.1 c-0.5 3.2 0.5 4.8 2.1 4.8l38.9 4.3l21.9-18.7c35.2-25.1 74.7-41.6 118.9-49.6c6.9 31.5 18.1 66.1 34.1 104c3.7 8 8 13.9 13.9 16.5 c5.3 2.7 10.1 3.7 14.9 2.7c4.3-1.1 8-4.3 10.1-9.6c2.1-5.3 1.1-11.7-2.7-19.7c-1.1-1.1-1.6-2.1-1.6-3.2c-0.5-1.1-1.1-2.1-1.6-3.2 c2.7-20.8 8.5-42.7 18.1-64.5c8.5-19.2 17.6-39.5 27.2-59.7l13.3-1.1c8.5 17.1 12.3 27.2 11.7 29.9v3.2c-8.5 2.7-12.8 4.8-12.8 5.9 v1.6l12.3 10.1c7.5 0.5 9.6 19.7 7.5 56.5l-1.6 1.1c-0.5 3.2 0.5 4.8 2.1 4.8l38.9 4.3l21.9-18.7c38.9-27.7 83.2-45.3 132.8-51.7 c4.8 19.2 6.9 38.4 6.9 57.6l-6.9 34.1h21.3l17.1 4.3c5.3-67.2-1.1-121.1-18.7-161.1c-8-17.6-13.9-27.7-17.1-30.9 c46.4-16.5 90.1-24 131.7-23.5c4.3 0.5 7.5 2.1 9.1 5.3c2.7 3.7 1.6 10.7-2.7 21.3l-14.4 22.9c-28.3 31.5-56 56-83.2 73.6l1.1 10.1 c4.8 10.7 13.3 22.4 25.1 34.1c11.7 12.3 33.6 27.7 65.1 46.4c32.5 4.8 46.4 4.3 42.1-1.1C907.2 420.8 876.3 393.1 856 364.8 L856 364.8z M550.4 69.9c0.5 0.5 0.5 1.1 0.5 1.1L550.4 69.9L550.4 69.9z M758.4 332.8c-58.7 8.5-104.5 22.4-137.6 42.7 c-3.7-11.2-6.4-20.8-7.5-29.3l60.8-18.1c28.8-5.3 44.3-8.5 45.3-10.1v-1.6l-14.9-16.5c-11.7-1.1-43.2 7.5-94.9 26.1l-3.2-0.5 l-10.1-19.2v-3.2c50.7-4.3 96-18.1 134.9-41.1c14.9 22.9 26.7 45.9 34.7 69.3L758.4 332.8L758.4 332.8z" />
                                    <path class="accents" d="M302.4 488.5l0.5-3.7c0-1.1 0.5-2.1 0.5-2.1c0.5-0.5 1.1-0.5 2.7-0.5c0.5 0 1.6 0 3.2 0.5c1.6 0 2.7 0.5 3.2 0.5 c2.7 0 3.7-0.5 3.7-2.1s-1.1-2.1-3.7-2.1c-1.1 0-2.1 0-3.2 0s-2.7 0-5.3 0c-0.5 0-1.6 0-2.7 0s-2.1 0-2.7 0s-1.1 0-1.1 0.5 c-0.5 0.5-0.5 1.1-0.5 2.7c0 1.1 0 3.2 0 5.3s0 3.7 0 5.3v31.5c0 1.1 0 3.2 0 5.3s0 3.7 0 5.3c0 1.1 0 1.6 0 2.1 c0.5 0.5 1.1 1.1 1.6 1.1s1.6 0 2.7 0s2.1 0 2.7 0h0.5c1.1 0 2.1 0 4.3 0c1.6 0 3.2 0 4.3 0c2.1 0 3.7-0.5 3.7-2.1 s-1.1-2.1-3.7-2.1c-0.5 0-1.6 0-3.2 0.5c-1.6 0-2.7 0.5-3.2 0.5c-1.1 0-2.1 0-2.7-0.5s-0.5-1.1-1.1-2.1l-0.5-3.7c0-1.6 0-4.8 0-8.5 v-20.8C302.4 493.3 302.4 490.1 302.4 488.5L302.4 488.5z M341.3 488.5c-3.7 0-6.9 1.6-9.1 4.8v-1.6c0-1.1-0.5-2.1-1.6-2.1 c-0.5 0-1.1 0-1.1 0c-1.1 0-1.6 0-1.6 0c-0.5 0-1.1 0-2.1 0s-1.6 0-2.1 0c-2.1 0-2.7 0.5-2.7 2.1s0.5 2.1 2.1 2.1 c0.5 0 1.1 0 1.6 0s1.1 0 1.6 0c1.1 0 2.1 1.1 2.1 3.7v14.9v3.2c0 2.1-0.5 3.2-1.6 3.2c0 0-0.5 0-1.1 0h-1.1c0 0-0.5 0-1.1 0 c-1.6 0-2.7 0.5-2.7 2.1s1.1 2.1 2.7 2.1l3.7-0.5c1.1 0 2.7 0 4.3 0c0.5 0 1.6 0 3.2 0s2.1 0 3.2 0h0.5c1.6 0 2.7-0.5 2.7-2.1 s-0.5-2.1-2.1-2.1c-0.5 0-0.5 0-1.1 0s-1.1 0-1.6 0c-1.1 0-1.6-1.1-2.1-3.7c0-0.5 0-2.1 0-4.8v-4.3c0-3.7 0.5-6.9 1.1-8.5 c1.1-3.2 3.7-4.8 6.9-4.8c1.6 0 3.2 0.5 4.3 1.1c1.1 1.1 1.6 2.1 1.6 3.2c0 0.5 0 1.1-0.5 1.6c-0.5 0-0.5 0-1.1 0s-1.6 0.5-2.1 1.1 s-1.1 1.1-1.1 2.1c0 1.1 0.5 1.6 1.1 2.1s1.6 1.1 2.7 1.1c1.6 0 2.7-0.5 3.7-1.6c1.1-1.1 1.6-2.7 1.6-4.8c0-2.7-1.1-4.8-2.7-6.9 C346.7 489.6 344.5 488.5 341.3 488.5L341.3 488.5z M370.7 488.5c-4.8 0-8.5 1.6-11.7 5.3c-3.2 3.2-4.3 8-4.3 13.3 s1.6 9.6 4.3 12.8c2.7 3.2 6.4 4.8 11.2 4.8c3.7 0 6.9-1.1 10.1-3.2s4.3-4.8 4.3-7.5c0-1.6-1.1-2.7-2.7-2.7c-1.1 0-2.1 0.5-2.1 1.6 l-0.5 1.1c-0.5 1.6-1.6 3.2-3.2 4.3s-3.2 1.6-5.3 1.6c-3.2 0-5.3-1.1-7.5-3.2c-2.1-2.1-3.2-4.8-3.2-8.5c0-0.5 0-0.5 0.5-0.5 c0 0 0.5 0 1.1 0H383c1.1 0 1.6 0 2.1-0.5c0-0.5 0.5-1.6 0.5-3.2c0-4.3-1.6-8-4.3-10.7C378.1 490.1 374.4 488.5 370.7 488.5 L370.7 488.5z M378.1 502.9h-16c-1.1 0-1.6-0.5-1.6-1.1c0-2.1 1.1-4.3 3.2-5.9s4.3-2.7 6.9-2.7c2.7 0 4.3 1.1 6.4 2.7 c1.6 1.6 2.7 3.7 2.7 6.4C379.7 502.4 379.2 502.9 378.1 502.9L378.1 502.9z M409.6 491.2c-2.7 0-4.8 1.1-6.4 2.7s-2.7 4.3-2.7 6.4 c0 2.7 1.1 4.8 2.7 6.4s3.7 2.7 6.4 2.7c2.7 0 4.8-1.1 6.4-2.7s2.7-4.3 2.7-6.4c0-2.7-1.1-4.8-2.7-6.4 C414.4 492.3 411.7 491.2 409.6 491.2L409.6 491.2z M469.9 489.6c-0.5 0-1.6 0-2.7 0c-2.1 0-3.7 0.5-4.3 0.5c-0.5 0-1.1 0-2.1 0 l-2.7-0.5h-0.5h-0.5c-2.1 0-3.2 0.5-3.2 2.1s0.5 2.1 2.1 2.1c0.5 0 1.1 0 1.6 0s1.1 0 1.6 0c1.1 0 1.6 0.5 1.6 1.6 c0 0.5 0 1.1-0.5 2.1l-7.5 20.8l-8-20.8l-0.5-1.6c0-0.5 0-1.1 0-1.6s0.5-1.1 1.1-1.1c0 0 0.5 0 1.6 0.5c0 0 0.5 0 1.1 0 c1.6 0 2.7-0.5 2.7-2.1s-1.1-2.1-3.2-2.1c-0.5 0-0.5 0-1.1 0h-2.1c-1.6 0-2.7 0-3.2 0c-1.1 0-2.1 0-2.7 0l-2.7-0.5h-0.5 c-2.1 0-3.2 0.5-3.2 2.1s0.5 2.1 2.1 2.1c0.5 0 0.5 0 1.6 0c0.5 0 1.1 0 1.6 0c1.1 0 1.6 1.1 2.1 2.7l9.6 25.1 c0.5 2.1 2.1 3.2 3.7 3.2c2.1 0 3.2-1.1 4.3-3.2l9.6-24c1.1-2.1 1.6-3.2 2.7-3.2c0.5 0 0.5 0 1.6 0c0 0 0.5 0 1.1 0 c1.6 0 2.1-0.5 2.1-2.1C472.5 490.7 471.5 489.6 469.9 489.6L469.9 489.6z M509.9 517.9v-4.3c0-2.1-0.5-3.2-2.1-3.2 s-2.1 0.5-2.1 2.1v3.2c0 2.7-0.5 4.3-2.1 4.3c-1.1 0-2.1-0.5-2.1-2.1c0-0.5 0-1.6 0-3.7v-13.3c0-8-4.3-11.7-12.3-11.7 c-3.7 0-6.4 1.1-9.1 2.7s-3.7 3.7-3.7 6.4c0 1.1 0.5 2.1 1.1 3.2s1.6 1.1 2.7 1.1s1.6-0.5 2.7-1.1c0.5-0.5 1.1-1.1 1.1-2.1 c0-1.1-0.5-1.6-1.1-2.1s-0.5-0.5-0.5-0.5c0-0.5 0.5-1.1 1.1-1.6c1.6-1.1 3.7-1.6 5.9-1.6s4.3 0.5 5.3 1.6c1.1 1.1 2.1 2.7 2.1 4.3 c0 2.1-0.5 3.2-1.6 3.7s-3.7 1.1-7.5 1.6c-2.7 0.5-4.3 0.5-5.3 0.5s-2.1 0.5-3.2 1.1c-3.2 1.6-4.8 4.3-4.8 8c0 3.2 1.1 5.3 3.2 6.9 c2.1 1.6 4.8 2.7 8.5 2.7c4.8 0 8.5-1.6 10.7-4.8c1.1 3.2 3.2 4.8 6.9 4.8C507.7 524.3 509.9 522.1 509.9 517.9L509.9 517.9z M495.5 510.9c0 2.7-1.1 5.3-2.7 6.9s-4.3 2.7-6.9 2.7c-2.1 0-3.7-0.5-4.8-1.6c-1.1-1.1-1.6-2.1-1.6-4.3c0-3.2 2.7-5.3 7.5-5.9 c2.7 0 4.8-0.5 5.9-1.1s2.1-1.1 3.2-2.1v5.3L495.5 510.9L495.5 510.9z M484.8 485.3h14.9c0.5 0 1.1 0 1.6-0.5s0.5-1.1 0.5-1.6 c0-1.1-1.1-2.1-2.7-2.1h-14.9c-1.6 0-2.7 0.5-2.7 2.1C482.1 484.3 483.2 485.3 484.8 485.3L484.8 485.3z M547.7 489.6 c-0.5 0-1.6 0-3.2 0.5c-1.6 0-2.7 0.5-3.2 0.5s-1.6 0-2.1 0l-2.7-0.5c-0.5 0-1.1 0-1.6 0c-2.1 0-2.7 0.5-2.7 2.1s0.5 2.1 2.1 2.1 c0 0 0.5 0 1.6 0c0.5 0 0.5 0 1.1 0c1.1 0 1.6 0.5 1.6 1.1s0 1.1-0.5 1.6l-8 22.4l-7.5-23.5c0-0.5-0.5-1.1-0.5-1.1 c0-0.5 0.5-1.1 1.1-1.1s0.5 0 1.1 0s1.1 0 1.1 0c1.6 0 2.7-0.5 2.7-2.1s-1.1-2.1-2.7-2.1c-0.5 0-1.6 0-2.7 0 c-1.6 0-3.7 0.5-5.3 0.5h-0.5h-0.5l-2.7-0.5c-0.5 0-1.1 0-1.6 0c-2.1 0-3.2 0.5-3.2 2.1s0.5 2.1 2.1 2.1c0 0 0.5 0 1.6 0 c0.5 0 1.1 0 1.6 0c1.1 0 1.6 1.1 2.7 3.2l0.5 2.1l7.5 18.7c1.1 3.2 1.6 5.3 1.6 6.4c0 2.1-1.1 4.3-2.7 5.9 c-2.1 1.6-4.3 2.7-6.4 2.7s-3.2-0.5-3.7-1.6c1.1-0.5 2.1-1.1 2.1-2.7c0-1.1-0.5-1.6-1.1-2.1c-0.5-1.1-1.6-1.6-2.7-1.6 s-2.1 0.5-3.2 1.1c-1.1 1.1-1.1 2.1-1.1 3.2c0 2.1 1.1 3.7 2.7 4.8c1.6 1.6 4.3 2.1 6.9 2.1c4.3 0 8.5-2.1 11.2-5.9 c1.6-2.1 3.7-5.9 5.9-11.2l9.1-22.9c1.1-2.1 1.6-3.2 2.7-3.2c0 0 0.5 0 1.1 0c0 0 0.5 0 1.1 0c1.6 0 2.1-0.5 2.1-2.1 C550.4 490.7 549.3 489.6 547.7 489.6L547.7 489.6z M571.7 486.4c0-2.1 0-3.7 0-5.3c0-1.1 0-1.6 0-2.1c-0.5-0.5-1.1-1.1-1.6-1.1 s-1.6 0-2.7 0s-2.1 0-2.7 0c-2.1 0-3.7 0-5.3 0c-1.1 0-2.1 0-3.2 0c-2.1 0-3.7 0.5-3.7 2.1s1.1 2.1 3.7 2.1c0.5 0 1.6 0 3.2-0.5 c1.6 0 2.7-0.5 3.2-0.5c1.1 0 2.1 0 2.7 0.5s0.5 1.1 0.5 2.1l0.5 3.7c0 1.6 0 4.8 0 8.5v20.8c0 3.7 0 6.9 0 8.5l-0.5 3.7 c0 1.1-0.5 2.1-0.5 2.1c-0.5 0.5-1.1 0.5-2.7 0.5c-0.5 0-2.1 0-3.2-0.5c-1.6 0-2.7-0.5-3.2-0.5c-2.7 0-3.7 0.5-3.7 2.1 s1.1 2.1 3.7 2.1c1.1 0 2.1 0 3.2 0s2.7 0 5.3 0c0.5 0 1.6 0 2.7 0s2.1 0 2.7 0s1.1 0 1.6-0.5s0.5-1.1 0.5-2.7c0-1.1 0-3.2 0-5.3 s0-5.9 0-11.2v-20.3C571.7 492.3 571.7 488.5 571.7 486.4L571.7 486.4z M633.6 489.6c-0.5 0-1.6 0-2.7 0c-2.1 0-3.7 0.5-4.3 0.5 c-0.5 0-1.1 0-2.1 0l-2.7-0.5h-0.5h-0.5c-2.1 0-3.2 0.5-3.2 2.1s0.5 2.1 2.1 2.1c0.5 0 1.1 0 1.6 0s1.1 0 1.6 0 c1.1 0 1.6 0.5 1.6 1.6c0 0.5 0 1.1-0.5 2.1l-7.5 20.8l-8-20.8L608 496c0-0.5 0-1.1 0-1.6s0.5-1.1 1.1-1.1c0 0 0.5 0 1.6 0.5 c0 0 0.5 0 1.1 0c1.6 0 2.7-0.5 2.7-2.1s-1.1-2.1-3.2-2.1c-0.5 0-0.5 0-1.1 0H608c-1.6 0-2.7 0-3.2 0c-1.1 0-2.1 0-2.7 0l-2.7-0.5 h-0.5c-2.1 0-3.2 0.5-3.2 2.1s0.5 2.1 2.1 2.1c0.5 0 0.5 0 1.6 0c0.5 0 1.1 0 1.6 0c1.1 0 1.6 1.1 2.1 2.7l9.6 25.1 c1.1 2.1 2.1 3.2 3.7 3.2c2.1 0 3.2-1.1 4.3-3.2l9.6-24c1.1-2.1 1.6-3.2 2.7-3.2c0.5 0 0.5 0 1.6 0c0 0 0.5 0 1.1 0 c1.6 0 2.1-0.5 2.1-2.1C636.3 490.7 635.2 489.6 633.6 489.6L633.6 489.6z M644.8 515.7c-1.1 0-2.1 0.5-3.2 1.1 c-1.1 1.1-1.1 1.6-1.1 3.2c0 1.1 0.5 2.1 1.1 3.2c1.1 1.1 1.6 1.1 3.2 1.1c1.1 0 2.1-0.5 3.2-1.1c1.1-1.1 1.1-1.6 1.1-3.2 c0-1.1-0.5-2.1-1.1-3.2C646.9 516.3 645.9 515.7 644.8 515.7L644.8 515.7z M693.9 507.2c-1.6 0-2.1 1.1-2.7 2.7v4.3 c0 3.7-1.6 5.9-4.8 5.9s-4.8-2.1-4.8-6.9v-16.5c0-1.1 0.5-1.6 1.1-1.6h7.5c1.6 0 2.7-1.1 2.7-2.7s-1.1-2.1-2.7-2.1h-7.5 c-0.5 0-1.1-0.5-1.1-1.1v-6.9c0-1.6-0.5-2.7-2.1-2.7s-2.7 1.1-2.7 2.7v6.9c0 1.1-0.5 1.1-1.1 1.1H673c-0.5 0-1.1 0-1.6 0.5 s-0.5 1.1-0.5 1.6s0 1.1 0.5 1.6s1.1 0.5 1.6 0.5h2.1c1.1 0 1.1 0.5 1.1 1.6v16c0 3.7 0.5 6.9 1.6 8.5c1.6 2.1 4.3 3.2 7.5 3.2 c3.7 0 6.4-1.1 8.5-3.7c1.1-2.1 1.6-5.3 1.6-10.1C696.5 508.3 695.5 507.2 693.9 507.2L693.9 507.2z M715.2 488.5 c-4.8 0-8.5 1.6-11.2 4.8c-2.7 3.2-4.3 7.5-4.3 12.8s1.6 9.6 4.3 12.8s6.4 4.8 11.2 4.8s8.5-1.6 11.7-4.8c2.7-3.2 4.3-7.5 4.3-13.3 c0-5.3-1.6-9.6-4.3-12.8C724.3 490.1 720 488.5 715.2 488.5L715.2 488.5z M722.7 516.3c-1.6 2.1-4.3 3.7-7.5 3.7s-5.9-1.1-7.5-3.7 c-1.6-2.1-2.7-5.9-2.7-9.6v-1.1c0-4.3 1.1-6.9 3.2-9.1c1.6-2.1 4.3-3.2 7.5-3.2c6.9 0 10.1 4.3 10.1 13.3 C725.9 510.9 724.8 514.1 722.7 516.3L722.7 516.3z M787.7 518.9c0 0-0.5 0-1.6 0c-0.5 0-0.5 0-1.6 0s-1.6-0.5-1.6-1.1 s-0.5-2.7-0.5-5.3v-17.6c0-1.1 0-2.7 0-5.3c0-3.2 0-4.8 0-5.3c0-2.1 0-3.2 0-3.7V480c0-1.6-0.5-2.7-1.6-2.7c-0.5 0-1.1 0-1.6 0 s-1.6 0-1.6 0s-0.5 0-2.1 0c-1.1 0-1.6 0-2.1 0c-2.1 0-3.2 0.5-3.2 2.1s1.1 2.1 2.7 2.1c0.5 0 1.1 0 1.6 0s1.1 0 1.6 0 c1.1 0 1.6 0.5 1.6 2.1c0 0.5 0 1.6 0 3.2v6.9c-2.1-3.2-5.3-5.3-10.1-5.3s-8 1.6-10.7 4.8c-2.7 3.2-4.3 7.5-4.3 12.8 s1.6 9.6 4.3 12.8s6.4 4.8 10.7 4.8s8-1.6 10.1-4.8v1.6c0 1.6 0.5 2.7 1.6 2.7c0.5 0 1.1 0 1.6 0c1.1 0 1.6 0 1.6 0 c0.5 0 1.1 0 2.1 0s1.6 0 2.1 0c2.1 0 3.2-0.5 3.2-2.1C789.9 520 789.3 518.9 787.7 518.9L787.7 518.9z M777.6 512.5 c-0.5 2.1-1.1 4.3-2.7 5.3c-1.6 1.6-3.7 2.1-5.9 2.1c-3.2 0-5.9-1.1-7.5-3.7c-1.6-2.7-2.7-5.9-2.7-10.1c0-4.3 1.1-7.5 2.7-9.6 c1.6-2.1 4.3-3.7 7.5-3.7c2.1 0 4.3 0.5 6.4 2.1c1.6 1.1 2.7 3.2 2.7 5.3c0 1.1 0.5 3.2 0.5 5.9 C777.6 508.8 777.6 510.9 777.6 512.5L777.6 512.5z M812.3 488.5c-3.7 0-6.9 1.6-9.1 4.8v-1.6c0-1.1-0.5-2.1-1.6-2.1 c-0.5 0-1.1 0-1.1 0c-0.5 0-1.6 0-1.6 0c-0.5 0-1.1 0-2.1 0s-1.6 0-2.1 0c-2.1 0-2.7 0.5-2.7 2.1s0.5 2.1 2.1 2.1 c0.5 0 1.1 0 1.6 0s1.1 0 1.6 0c1.1 0 1.6 1.1 2.1 3.7v14.9v3.2c0 2.1-0.5 3.2-1.6 3.2c0 0-0.5 0-1.1 0h-1.1c0 0-0.5 0-1.1 0 c-1.6 0-2.7 0.5-2.7 2.1s1.1 2.1 2.7 2.1l3.7-0.5c1.1 0 2.7 0 4.3 0c0.5 0 1.6 0 3.2 0c1.6 0 2.1 0 3.2 0l0 0 c1.6 0 2.7-0.5 2.7-2.1s-0.5-2.1-2.1-2.1c-0.5 0-0.5 0-1.1 0c-0.5 0-1.1 0-1.6 0c-1.1 0-1.6-1.1-2.1-3.7c0-0.5 0-2.1 0-4.8v-4.3 c0-3.7 0.5-6.9 1.1-8.5c1.1-3.2 3.7-4.8 6.9-4.8c1.6 0 3.2 0.5 4.3 1.1c1.1 1.1 1.6 2.1 1.6 3.2c0 0.5 0 1.1-0.5 1.6 c-0.5 0-0.5 0-1.1 0s-1.1 0.5-2.1 1.1c-0.5 0.5-0.5 1.1-0.5 2.1c0 1.1 0.5 1.6 1.1 2.1s1.6 1.1 2.7 1.1c1.6 0 2.7-0.5 3.7-1.6 c1.1-1.1 1.6-2.7 1.6-4.8c0-2.7-1.1-4.8-2.7-6.9C818.1 489.6 815.5 488.5 812.3 488.5L812.3 488.5z M841.6 488.5 c-4.8 0-8.5 1.6-11.7 5.3c-3.2 3.2-4.3 8-4.3 13.3s1.6 9.6 4.3 12.8s6.4 4.8 11.2 4.8c3.7 0 6.9-1.1 10.1-3.2 c3.2-2.1 4.3-4.8 4.3-7.5c0-1.6-1.1-2.7-2.7-2.7c-1.1 0-2.1 0.5-2.1 1.6l-0.5 2.1c-0.5 1.6-1.6 3.2-3.2 4.3 c-1.6 1.1-3.2 1.6-5.3 1.6c-3.2 0-5.3-1.1-7.5-3.2s-3.2-4.8-3.2-8.5c0-0.5 0-0.5 0.5-0.5c0 0 0.5 0 1.1 0h21.3c1.1 0 1.6 0 2.1-0.5 c0-0.5 0.5-1.6 0.5-3.2c0-4.3-1.6-8-4.3-10.7C849.1 490.1 845.9 488.5 841.6 488.5L841.6 488.5z M849.1 502.9h-16 c-1.1 0-1.6-0.5-1.6-1.1c0-2.1 1.1-4.3 3.2-5.9c2.1-1.6 4.3-2.7 6.9-2.7s4.3 1.1 6.4 2.7c1.6 1.6 2.7 3.7 2.7 6.4 C850.7 502.4 850.1 502.9 849.1 502.9L849.1 502.9z M894.4 510.4c-1.6 0-2.1 0.5-2.1 2.1v3.2c0 2.7-0.5 4.3-2.1 4.3 c-1.1 0-2.1-0.5-2.1-2.1c0-0.5 0-1.6 0-3.7v-13.3c0-8-4.3-11.7-12.3-11.7c-3.7 0-6.4 1.1-9.1 2.7c-2.7 1.6-3.7 3.7-3.7 6.4 c0 1.1 0.5 2.1 1.1 3.2s1.6 1.1 2.7 1.1s1.6-0.5 2.7-1.1c0.5-0.5 1.1-1.1 1.1-2.1c0-1.1-0.5-1.6-1.1-2.1c-0.5-0.5-0.5-0.5-0.5-0.5 c0-0.5 0.5-1.1 1.1-1.6c1.6-1.1 3.7-1.6 5.9-1.6c2.1 0 4.3 0.5 5.3 1.6c1.1 1.1 2.1 2.7 2.1 4.3c0 2.1-0.5 3.2-1.6 3.7 s-3.7 1.1-7.5 1.6c-2.7 0.5-4.3 0.5-5.3 0.5s-2.1 0.5-3.2 1.1c-3.2 1.6-4.8 4.3-4.8 8c0 3.2 1.1 5.3 3.2 6.9 c2.1 1.6 4.8 2.7 8.5 2.7c4.8 0 8.5-1.6 10.7-4.8c1.1 3.2 3.2 4.8 6.9 4.8c4.3 0 6.9-2.1 6.9-6.4v-4.3 C896.5 511.5 896 510.4 894.4 510.4L894.4 510.4z M882.1 510.9c0 2.7-1.1 5.3-2.7 6.9c-1.6 1.6-4.3 2.7-6.9 2.7 c-2.1 0-3.7-0.5-4.8-1.6s-1.6-2.1-1.6-4.3c0-3.2 2.7-5.3 7.5-5.9c2.7 0 4.8-0.5 5.9-1.1c1.1-0.5 2.1-1.1 3.2-2.1v5.3L882.1 510.9 L882.1 510.9z M955.7 518.9c-0.5 0-0.5 0-1.6 0c-0.5 0-1.1 0-1.6 0c-1.1 0-1.6-1.1-1.6-2.7c0-0.5 0-1.6 0-3.2v-11.7 c0-3.2-0.5-5.3-1.1-6.9c-1.1-2.1-2.1-3.7-4.8-5.3c-2.1-1.1-4.3-1.6-6.9-1.6c-2.7 0-4.3 0.5-5.9 1.1c-1.6 0.5-3.2 2.1-4.8 3.7 c-2.1-3.2-5.3-5.3-9.6-5.3c-2.1 0-3.7 0.5-5.3 1.1c-1.6 0.5-3.2 2.1-4.8 3.7v-2.1c0-1.1-0.5-2.1-1.6-2.1l0 0h-1.6h-1.1 c-0.5 0-1.6 0-2.1 0c-1.1 0-1.6 0-2.1 0c-1.6 0-2.7 0.5-2.7 2.1s1.1 2.1 2.7 2.1c0.5 0 0.5 0 1.1 0c1.1 0 1.6-0.5 1.6-0.5 c1.1 0 1.6 0.5 1.6 1.6s0.5 3.2 0.5 6.9v13.9c0 2.1-0.5 3.2-2.1 3.2c0 0 0 0-0.5 0l-1.6-0.5c0 0 0 0-0.5 0h-0.5 c-1.6 0-2.7 0.5-2.7 2.1s1.1 2.1 2.7 2.1c0.5 0 1.6 0 3.7-0.5c1.6 0 2.7 0 3.2 0c1.1 0 2.1 0 3.7 0.5c1.1 0 2.1 0 2.7 0 c2.1 0 3.2-0.5 3.2-2.1s-1.1-2.1-2.7-2.1H912h-0.5c-0.5 0-1.1 0.5-1.6 0.5c-1.1 0-1.1-0.5-1.6-2.1c0-0.5 0-1.6 0-3.2v-9.1 c0-4.3 0.5-7.5 2.1-9.1c1.6-2.1 3.7-3.2 6.9-3.2c2.7 0 4.3 0.5 5.3 2.1s1.6 4.3 1.6 8v9.6v3.2c0 2.1-0.5 3.2-1.6 3.2 c-0.5 0-0.5 0-1.6-0.5c-0.5 0-0.5 0-1.1 0c-1.1 0-2.1 0.5-2.1 2.1s1.1 2.1 2.7 2.1c1.1 0 1.6 0 3.2-0.5c1.1 0 2.1-0.5 3.2-0.5 c0.5 0 1.6 0 3.2 0.5c1.1 0 2.1 0.5 3.2 0.5c2.1 0 3.2-0.5 3.2-2.1c0-0.5 0-1.1-0.5-1.6s-1.1-0.5-1.6-0.5s-0.5 0-1.1 0 c-0.5 0-1.1 0-1.1 0c-1.1 0-1.6-0.5-1.6-1.6s-0.5-3.7-0.5-8v-4.8c0-4.3 0.5-7.5 1.6-9.1c1.1-2.1 3.2-3.2 6.4-3.2 c1.6 0 3.2 0.5 4.3 1.1s2.1 2.1 2.7 3.2c0.5 1.6 0.5 3.7 0.5 6.9v8.5c0 3.2 0 4.8-0.5 5.9c0 0.5-0.5 1.1-1.6 1.1 c-0.5 0-0.5 0-1.1 0c-0.5 0-1.1 0-1.6 0c-1.6 0-2.1 0.5-2.1 2.1s1.1 2.1 2.7 2.1c0.5 0 1.6 0 3.2 0c1.6 0 2.7 0 3.2 0s1.6 0 3.2 0 s2.1 0 3.2 0c1.6 0 2.7-0.5 2.7-2.1C957.9 520 957.3 518.9 955.7 518.9L955.7 518.9z" />
                                    <polygon class="accents" points="335.5,221.9 285.3,219.7 243.2,248 280.5,203.7 280.5,203.7" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navigation">
                        <?php
                            echo wp_nav_menu(array(
                                'theme_location'  => 'header_left',
                                'container'       => false,
                                'menu_id'         => '',
                                'menu_class'      => 'nav navbar-nav',
                                'depth'           => '0',
                                'walker'          => new BlunderBootstrapNavWalker()
                            ));
                        ?>
                        <?php
                            echo wp_nav_menu(array(
                                'theme_location'  => 'header_right',
                                'container'       => false,
                                'menu_id'         => '',
                                'menu_class'      => 'nav navbar-nav navbar-right',
                                'depth'           => '0',
                                'walker'          => new BlunderBootstrapNavWalker()
                            ));
                        ?>
                    </div>
                </div>
            </nav>
        </header>