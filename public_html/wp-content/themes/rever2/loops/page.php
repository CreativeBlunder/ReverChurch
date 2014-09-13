<?php
/**
 * @package WordPress
 * @subpackage Rêver_Responsive
 * @since Rêver Responsive 1.0
 */
?>
<section class="page-heading">
    <div class="container">
        <h1><?php global $post; echo $post->post_title; ?></h1>
        <?php echo breadcrumbs(); ?>
    </div>
</section>
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 content">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; else: ?>
                <?php get_template_part('404'); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-lg-3">
                <?php get_sidebar('page'); ?>
            </div>
        </div>
    </div>
</section>