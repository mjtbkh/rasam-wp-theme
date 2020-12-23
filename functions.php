<?php

add_theme_support( 'post-thumbnails' );
function register_rasam_menus() {
  register_nav_menus(
    array('header-menu' => __('Header menu'))
  );
};
add_action('init', 'register_rasam_menus');
?>
