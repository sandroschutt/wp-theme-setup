<?php
namespace ThemeSetup;

interface ThemeSettingsInterface {
    public function enqueueScripts();
    public function enqueueStyles();
}