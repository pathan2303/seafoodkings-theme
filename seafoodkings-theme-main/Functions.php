<?php
add_action('wp_enqueue_scripts', function () {
  // Base theme stylesheet
  wp_enqueue_style('seafoodkings-style', get_stylesheet_uri());

  // Your custom styles (put old CSS into assets/styles.css)
  wp_enqueue_style('seafoodkings-custom', get_stylesheet_directory_uri() . '/assets/styles.css', array('seafoodkings-style'));

  // Products data (PHP -> JS) must load first
  wp_enqueue_script(
    'seafoodkings-products-data',
    get_stylesheet_directory_uri() . '/assets/products-data.js.php',
    array(),
    null,
    true
  );

  // Rendering JS (builds product cards into #productList). Depends on products-data
  wp_enqueue_script(
    'seafoodkings-render',
    get_stylesheet_directory_uri() . '/assets/render.js',
    array('seafoodkings-products-data'),
    null,
    true
  );

  // WooCommerce core add-to-cart (optional; loads only if Woo exists)
  if (class_exists('WooCommerce')) {
    wp_enqueue_script('wc-add-to-cart');
  }
});

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
register_nav_menus(array('primary' => 'Primary Menu'));
