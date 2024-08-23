<?php
function WPChildThemeBoilerplateAutoload($class) {
    $prefix = 'WPChildThemeBoilerplate\\';
    $base_dir = __DIR__ . '/includes/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
        echo "Loaded $file successfully.<br>";
    } else {
        echo "File $file does not exist.<br>";
    }
}

spl_autoload_register('WPChildThemeBoilerplateAutoload');