<html>
  <head>
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <?php the_custom_logo() ?>
        <h1><?php bloginfo("name") ?></h1>
        <p><?php bloginfo("description") ?></p>
        <?php get_search_form() ?>
      </div>
    </div>
    <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>