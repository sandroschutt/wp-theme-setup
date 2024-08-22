<?php
namespace ThemeSetup;

require_once dirname(__FILE__) . "/ThemePublicSettings.php";
require_once dirname(__FILE__) . "/ThemeAdminSettings.php";

use ThemeSetup\ThemeAdminSettings;
use ThemeSetup\ThemePublicSettings;

class ThemeSettings {
    private $public;
    private $admin;

    public function __construct() {
        $this->public = new ThemePublicSettings();
        $this->admin = new ThemeAdminSettings();
        $this->activationHook();
        $this->actionHooks();
        $this->filterHooks();
    }

    public function actionHooks() {
        add_action('admin_enqueue_scripts', array($this->admin, 'enqueueScripts'));
        add_action('admin_enqueue_scripts', array($this->admin, 'enqueueStyles'));
        add_action('wp_enqueue_scripts', array($this->public, 'enqueueScripts'));
        add_action('wp_enqueue_scripts', array($this->public, 'enqueueStyles'));
    }

    public function filterHooks() {
        add_filter("script_loader_tag", array($this->public, 'addPublicModules'), 10, 3);
    }

    public function activationHook() {
        // Define actions to be performed upon activation
        // add_action('after_switch_theme', array($this->admin, 'create_theme_pages'));
    }
}
