<?php get_header() ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <h1>All books with format of <?php echo get_queried_object()->name ?></h1>
                <ul class="list-group">
                    <?php while(have_posts()): the_post() ?>
                        <li class="list-group-item">
                            <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                            <p>Author: <?php the_field("author") ?><br>Length: <?php the_field("number_of_pages") ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
<?php get_footer() ?>