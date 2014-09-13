<?php
/**
 * @package WordPress
 * @subpackage Rêver_Responsive
 * @since Rêver Responsive 1.0
 */
?>
<section class="page-heading">
    <div class="container">
        <h1>Rêver Blog</h1>
        <?php echo breadcrumbs(); ?>
    </div>
</section>
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 content">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="post">
                    <?php if (has_post_thumbnail()): ?><a class="post-image" href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo the_post_thumbnail('slider'); ?></a><?php endif; ?>
                    <article>
                        <div class="meta">
                            <div class="date">
                                <div class="day"><?php echo the_time('d'); ?></div>
                                <div class="month-year"><?php echo the_time("m \'y"); ?></div>
                            </div>
                            <div class="comment-count"><?php echo $post->comment_count; ?></div>
                        </div>
                        <h2><?php echo the_title(); ?></h2>
                        <?php echo the_content(); ?>
                    </article>
                </div>
                <?php echo comments_template(); ?>
            <?php endwhile; else: ?>
                <?php get_template_part('404'); ?>
            <?php endif; ?>
            </div>
            <div class="col-md-4 col-lg-3">
                <?php get_sidebar('blog'); ?>
            </div>
        </div>
    </div>
</section>