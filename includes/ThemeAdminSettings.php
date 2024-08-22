<?php

namespace ThemeSetup;

require_once dirname(dirname(__FILE__)) . "/includes/ThemeInterface.php";

class ThemeAdminSettings implements ThemeSettingsInterface
{
    private $adminStylesPath;
    private $adminScriptsPath;

    public function __construct()
    {
        $this->adminStylesPath = get_theme_file_uri() . '/assets/sass/build/admin/';
        $this->adminScriptsPath = get_theme_file_uri() . '/assets/javascript/admin/';
    }

    public function enqueueScripts()
    {
        wp_enqueue_script('theme-setup', $this->adminScriptsPath . 'theme-setup.js');
    }

    public function enqueueStyles()
    {
        wp_enqueue_style('theme-setup', $this->adminStylesPath . 'admin.css');
    }
}
