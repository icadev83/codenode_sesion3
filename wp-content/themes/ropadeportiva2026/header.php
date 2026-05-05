<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
    <?php
    $registro_pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-ropa-deportiva.php',
        'number' => 1,
    ));
    $registro_page = !empty($registro_pages) ? $registro_pages[0] : null;
    $registro_url = $registro_page ? get_permalink($registro_page->ID) : home_url('/');

    $posts_page_id = (int) get_option('page_for_posts');
    $blog_url = $posts_page_id ? get_permalink($posts_page_id) : home_url('/');
    ?>

    <header class="site-header">
        <div class="site-branding">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>

        <nav class="menu-superior" aria-label="Menu principal">
            <ul class="menu-principal">
                <li class="<?php echo is_page_template('template-ropa-deportiva.php') ? 'current-menu-item' : ''; ?>">
                    <a href="<?php echo esc_url($registro_url); ?>">Registro de ropa deportiva</a>
                </li>
                <li class="<?php echo (is_home() || ($posts_page_id && is_page($posts_page_id))) ? 'current-menu-item' : ''; ?>">
                    <a href="<?php echo esc_url($blog_url); ?>">Blog</a>
                </li>
            </ul>
        </nav>
    </header>
