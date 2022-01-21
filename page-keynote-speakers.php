<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <div class="speakers">
            <?php while(have_posts()): the_post() ?>
                <h3><?php the_title() ?></h3>
                <small>Written by: <?php the_author() ?> at: <?php the_date() ?></small>
                <p><?php the_content() ?></p>
            <?php endwhile ?>
        </div>
    <?php else: ?>
        <p>No content on this page yet - sorry :(</p>
    <?php endif; ?>

<?php get_footer(); ?>