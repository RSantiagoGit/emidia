<?php get_header(); ?>

    <div class="row">
        <div class="col-9">
            <h1>Noticias</h1>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><em><?php the_time('l, F jS, Y'); ?></em></p>
                <hr>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, there are no posts.'); ?></p>
            <?php endif; ?>

        </div>
        <div class="col-3">

            <?php get_sidebar(); ?>

        </div>
    </div>

<?php get_footer(); ?>