<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">

  <nav class="menu-principal">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'menu'
      ));
    ?>
  </nav>

  <div class="titulo-web">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </div>

</header>