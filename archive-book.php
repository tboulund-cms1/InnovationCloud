<?php get_header() ?>

    <?php if(have_posts()): ?>
        <div class="container">
            <div class="row">
                <?php while(have_posts()): the_post() ?>
                    <div class="card col-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <a class="card-link" href="<?php the_permalink() ?>">Read more</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php else: ?>
        <p>Sorry there are no books to show at the moment</p>
    <?php endif; ?>

<?php get_footer() ?>