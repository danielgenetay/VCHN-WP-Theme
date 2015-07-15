<?php
get_header();
?>
<div class="clearfix" style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="jumbotron text-center <?php bc('12', '12', '12', ''); ?>">

                <div class="entry-content">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/docbadnews.jpg" style="float:left;">
                    <p>
                        <?php _e('Look like something went wrong! The page you were looking for is not here', 'framework'); ?>
                    </p>

                    <p>
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Visit Homepage','framework'); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
