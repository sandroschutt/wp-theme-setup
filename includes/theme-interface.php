<?php
namespace ThemeSetup;

interface ThemeSettingsInterface {
    public function enqueue_scripts();
    public function enqueue_styles();
}