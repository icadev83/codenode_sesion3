<?php
function ropadeportiva2026_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'ropadeportiva2026'),
        'footer' => __('Menu Footer', 'ropadeportiva2026'),
    ));
}
add_action('after_setup_theme', 'ropadeportiva2026_setup');
