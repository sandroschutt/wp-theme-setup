<?php

/**
 * Theme settings are handled by the ThemeSettings class.
 */

namespace ThemeSetup;

require dirname(__FILE__) . "/includes/theme-settings.php";

$themeSettings = new ThemeSettings();

add_filter('wp_lazy_loading_enabled', '__return_false');
