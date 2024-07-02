<?php
namespace ThemeSetup;

require_once dirname(__FILE__) . "/theme-public.php";
require_once dirname(__FILE__) . "/theme-admin.php";

use ThemeSetup\ThemeAdminSettings;
use ThemeSetup\ThemePublicSettings;

class ThemeSettings {
    private $public;
    private $admin;

    public function __construct() {
        $this->public = new ThemePublicSettings();
        $this->admin = new ThemeAdminSettings();
        $this->activation_hook();
        $this->action_hooks();
        $this->filter_hooks();
    }

    public function action_hooks() {
        add_action('wp_enqueue_scripts', array($this->admin, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this->admin, 'enqueue_styles'));
        add_action('wp_enqueue_scripts', array($this->public, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this->public, 'enqueue_styles'));
        add_action('admin_notices', array($this->admin, 'admin_notices'));
    }

    public function filter_hooks() {
        add_filter("script_loader_tag", array($this->public, 'add_public_modules'), 10, 3);
    }

    public function activation_hook() {
        // Define actions to be performed upon activation
        // add_action('after_switch_theme', array($this->admin, 'create_theme_pages'));
    }
}
