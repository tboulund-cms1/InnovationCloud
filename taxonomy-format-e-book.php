<?php get_header() ?>

    <div class="container-fluid font-monospace">
        <div class="row">
            <div class="col-6 offset-3">
                <h1>E-books</h1>
                <ul class="list-group list-group-flush">
                    <?php while(have_posts()): the_post() ?>
                        <li class="list-group-item list-group-item-info">
                            <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                            <p>Author: <?php the_field("author") ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>

<?php get_footer() ?>