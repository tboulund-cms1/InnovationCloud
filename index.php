<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() ?>/style.css' />
  </head>
  <body>
    <div class="header">
      <div class="container">
        <h1>Innovation Cloud</h1>
        <p>Connect your ideas globally</p>
      </div>
    </div>

    <div class="main">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post() ?>
                <?php the_content() ?>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to show here.</p>
        <?php endif; ?>
    </div>

    <div class="footer">
      <div class="container">
        <p>© Copyright 2021</p>
      </div>
    </div>
  </body>
</html>