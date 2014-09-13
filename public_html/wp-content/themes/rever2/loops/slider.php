<?php
/**
 * @package WordPress
 * @subpackage Rêver_Responsive
 * @since Rêver Responsive 1.0
 */
$args = array(
    'showposts' => 3,
    'post_type' => 'slides',
);

$slides = new WP_Query();
?>
<?php $slides->query($args); if ($slides->have_posts()): ?>
<section class="jumbotron">
    <?php while ($slides->have_posts()): $slides->the_post(); ?>
    <?php
        $background = get_post_meta(get_the_ID(), 'slide_background', true);
        $content = get_post_meta(get_the_ID(), 'slide_content', true);
        $link = get_post_meta(get_the_ID(), 'slide_link', true);
    ?>
    <a class="<?php echo basename(get_permalink()); ?>" style="background-image: url(<?php echo $background; ?>);" href="<?php echo $link; ?>">
        <div class="container">
            <?php echo $content; ?>
        </div>
    </a>
    <?php endwhile; ?>
</section>
<?php endif;