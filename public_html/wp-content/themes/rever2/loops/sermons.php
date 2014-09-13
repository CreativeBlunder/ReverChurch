<?php
/**
 * @package WordPress
 * @subpackage Rêver_Responsive
 * @since Rêver Responsive 1.0
 */
?>
<section class="page-heading">
    <div class="container">
        <h1>Sermons</h1>
        <?php echo breadcrumbs(); ?>
    </div>
</section>
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 content">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <div class="sermon">
                        <div class="row">
                            <?php if (has_post_thumbnail()): ?>
                            <div class="col-sm-4 col-md-3"><a class="thumbnail" href="<?php echo the_permalink(); ?>"><?php echo the_post_thumbnail('full'); ?></a></div>
                            <div class="col-sm-8 col-md-9">
                            <?php else: ?>
                            <div class="col-xs-12">
                            <?php endif; ?>
                                <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                                <p class="sermon-meta">
                                    Sermon by <?php echo the_terms( $post->ID, 'wpfc_preacher', '', ', ', '' ); ?>, <?php echo wpfc_sermon_meta('bible_passage', '<span class="bible-passage">'.__( 'Bible Text: ', 'sermon-manager'), '</span>'); ?>
                                </p>
                                <p><?php echo $post->sermon_description; ?></p>
                                <p style="width: 300px;"><?php echo wp_audio_shortcode(array('src' => $post->sermon_audio)); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                <?php get_template_part('404'); ?>
                <?php endif; ?>
                <div class="next-prev">
                    <span class="prev"><?php echo next_posts_link('<i class="fa fa-arrow-left"></i> Older Sermons'); ?></span>
                    <span class="next"><?php echo previous_posts_link('Newer Sermons <i class="fa fa-arrow-right"></i>'); ?></span>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <?php get_sidebar('page'); ?>
            </div>
        </div>
    </div>
</section>