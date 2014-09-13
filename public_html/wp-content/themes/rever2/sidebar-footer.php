<div class="row">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')): ?><?php endif; ?>
    <div class="col-md-3">
        <div class="widget">
            <h3>Stay Connected</h3>
            <p>Enter your Email Address below to sign up for our <a href="#">Weekly Bulletin</a>.</p>
            <form action="#" class="newsletter-signup" method="post">
                <div class="form-group">
                    <input class="form-control" name="email_address" placeholder="Email Address" type="email">
                    <button class="btn btn-success" name="newsletter_submit" type="submit"><i class="fa fa-arrow-right"></i></button>
                </div>
            </form>
            <?php get_template_part('partials/social'); ?>
        </div>
    </div>
</div>