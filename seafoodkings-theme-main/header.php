<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <nav class="nav-links" style="display:flex;gap:16px;align-items:center;padding:10px 16px;">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo esc_url(home_url('/aboutus')); ?>">About Us</a>
    <a href="<?php echo esc_url(home_url('/cart')); ?>">Cart</a>
    <a href="https://wa.me/919152299833" target="_blank" rel="noopener">Contact Us</a>
  </nav>
</header>
