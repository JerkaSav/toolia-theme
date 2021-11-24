<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="wp-content/themes/motheme/style.css" />
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="main-header sticky-top container-md col-12 py-3 mx-1">
    <?php
    wp_nav_menu(
      array('theme_location' => 'primary-menu')
    )
    ?>
  </header>