<?php
function UEElx_setup() {
    add_theme_support('post-thumbnails');

    // Soporte para WooCommerce
    add_theme_support('woocommerce');

    // Soporte para galería de productos WooCommerce
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    register_nav_menus(array(
        'primary' => __('Menú Principal', 'UEElx'),
        'footer' => __('Menú Footer', 'UEElx')
    ));
}
add_action('after_setup_theme', 'UEElx_setup');

function UEElx_cargar_estilos() {
    wp_enqueue_style(
        'UEElx-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'UEElx_cargar_estilos');