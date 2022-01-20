<html>
  <head>
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <h1><?php bloginfo("name") ?></h1>
        <p><?php bloginfo("description") ?></p>
      </div>
    </div>
    <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>