<?php
/**
 * @package WordPress
 * @subpackage Rêver_Responsive
 * @since Rêver Responsive 1.0
 */
$args = array(
    'showposts' => 4
);

$latestPosts = new WP_Query();
?>
<?php $latestPosts->query($args); if ($latestPosts->have_posts()): ?>
<section class="latest-posts">
    <div class="container">
        <h2 class="bordered text-center">
            <span class="separator"><span></span></span>
            <span class="title">What's New?</span>
            <span class="separator"><span></span></span>
        </h2>
        <div class="row">
            <?php while ($latestPosts->have_posts()): $latestPosts->the_post(); ?>
            <div class="col-sm-6 col-md-3">
                <div class="post">
                    <?php if (has_post_thumbnail()): ?><a class="post-image" href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_post_thumbnail('full'); ?></a><?php endif; ?>
                    <article>
                        <div class="meta">
                            <div class="date">
                                <div class="day"><?php echo the_time('d'); ?></div>
                                <div class="month-year"><?php echo the_time("m \'y"); ?></div>
                            </div>
                            <div class="comment-count"><?php echo comments_number('0', '1', '%'); ?></div>
                        </div>
                        <h3><a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_title(); ?></a></h3>
                        <p><?php echo blunder_excerpt(get_the_content(), 14); ?></p>
                    </article>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif;