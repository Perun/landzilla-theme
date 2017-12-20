<?php get_header(); ?>
<?php get_sidebar(); ?>
<!-- Anfang des Inhaltsbereiches -->
    <div id="inhalt">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_date('','<h2>','</h2>'); ?>

    <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h3>

    <div class="meta"><?php _e("Category:"); ?> <?php the_category(',') ?> &ndash; <?php if (function_exists('the_tags')) { the_tags('Tags: ', ', ', ' &ndash; '); } ?><?php the_author() ?> &ndash; <?php the_time() ?> <?php edit_post_link(); ?></div>

    <div class="storycontent">
    <?php the_content(__('(more...)')); ?>
    </div>

    <div class="pagination"><?php previous_post_link(); ?>&nbsp;&ndash;&nbsp;<?php next_post_link(); ?></div>

    <?php comments_template(); ?>

            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

</div>
<!-- Ende des Inhaltsbereiches -->
<?php get_footer(); ?>