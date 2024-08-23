<?php

/**
 * Theme settings are handled by the ThemeSettings class.
 * Admin logic, javascript and styles are handled by AdminSettings class.
 * Public logic, javascript and styles are handled by PublicSettings class.
 */

require dirname(__FILE__) . "/autoload.php";

$themeSettings = new WPChildThemeBoilerplate\ThemeSettings();

add_filter('wp_lazy_loading_enabled', '__return_false');
