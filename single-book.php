<?php get_header() ?>

    <div class="container">
        <div class="col-6 col-offset-3">
            <?php while(have_posts()): the_post() ?>
                <h1><?php the_title() ?></h1>
                <hr>
                <p class="fw-bold"><?php the_content() ?></p>
            <?php endwhile; ?>
        </div>
    </div>

<?php get_footer() ?>