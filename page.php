<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- Anfang des Inhaltsbereiches -->
    <div id="inhalt">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2 id="page"><?php the_title(); ?></h2>

        <div class="storycontent">
        <?php the_content(__('(more...)')); ?>
         <?php edit_post_link(); ?>
        </div>

                <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
    </div>
<!-- Ende des Inhaltsbereiches -->
<?php get_footer(); ?>