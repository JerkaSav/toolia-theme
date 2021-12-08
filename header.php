<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo("name"); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="container-fluid">
    <a href="<?php echo home_url('/') ?>"><img class="toolia-logo mx-auto p-3" src="<?php echo THEME_IMG_PATH . '/toolia.png'; ?>" alt="toolia logo">
    </a>
  </div>
  <header class="main-header sticky-top col-12 py-3 my-2 bg-light">
    <?php
    wp_nav_menu(
      array('theme_location' => 'primary-menu')
    );
    ?>

  </header>