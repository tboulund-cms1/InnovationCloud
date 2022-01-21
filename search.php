<?php get_header() ?>

<p>We found the following search results:</p>
<ul>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            <li>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </li>
        <?php endwhile ?>
    <?php else: ?>
        <p>Sorry, we didn't find anything that matched your search.</p>
    <?php endif ?>
</ul>

<?php get_footer() ?>