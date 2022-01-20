<?php get_header() ?>

    <div class="main">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post() ?>
                <?php the_content() ?>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to show here.</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>