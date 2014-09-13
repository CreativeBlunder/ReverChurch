<?php
/**
 * @package WordPress
 * @subpackage Rêver_Responsive
 * @since Rêver Responsive 1.0
 */
?>
        <footer>
            <div class="footer-widgets">
                <div class="container">
                    <?php get_sidebar('footer'); ?>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p class="copyright">&copy; Copyright 2014 Rêver Church. All Rights Reserved</p>
                    <a class="to-top" href="#top"><i class="fa fa-chevron-circle-up"></i></a>
                </div>
            </div>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/fontawesome-markers.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/theme.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>