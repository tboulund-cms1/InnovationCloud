<?php
/*
Template Name: Get In Touch template
*/
?>

<?php get_header() ?>

    <div class="container">
        <h1>Get in touch</h1>
        <p>You can find us on the following Social Media:</p>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post() ?>
                <?php get_template_part("template-parts/author-box") ?>
                <?php the_content() ?>
            <?php endwhile ?>
        <?php else: ?>
            <p>No content found</p>
        <?php endif ?>
    </div>

<?php get_footer() ?>