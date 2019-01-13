<?php get_header(); ?>
    <div class="row">
        <div class="col">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>

        </div>
        <div class="col">

        </div>
    </div>
<?php get_footer(); ?>