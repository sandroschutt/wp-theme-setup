<?php

namespace ThemeSetup;

require_once dirname(dirname(__FILE__)) . "/includes/theme-interface.php";

class ThemePublicSettings implements ThemeSettingsInterface
{
    public function enqueue_scripts()
    {
        // if (is_front_page()) {
        //     // enqueue front page scripts
        // }

        // if (is_singular('post')) {
        //     // enqueue single post scripts
        // }

        // if (is_home()) {
        //     // enqueue blog home scripts
        // }

        // if (is_singular('post-type')) {
        // enqueue single post type scripts
        // }

        // if (is_post_type_archive('post-type')) {
        // enqueue post type archive scripts
        // }

        // if (get_page_template_slug() === 'page-slug' || is_page("page-slug")) {
        // enqueue specific pages' scripts
        // }
    }

    public function enqueue_styles()
    {
        wp_enqueue_style('parent-style',get_parent_theme_file_uri('style.css'));
        wp_enqueue_style('style', get_theme_file_uri() . '/assets/css/build/style.css');
        wp_enqueue_style('root-variables', get_theme_file_uri() . '/assets/css/root.css');
        wp_enqueue_style('screen-small', get_theme_file_uri() . '/assets/css/build/screen/small.css');
        wp_enqueue_style('screen-medium', get_theme_file_uri() . '/assets/css/build/screen/medium.css');

        if (is_front_page()) {
            wp_register_style('home', get_theme_file_uri() . '/assets/css/build/home.css');
            wp_enqueue_style('home');
        }

        if (is_singular('post')) {
            wp_register_style('single-post', get_theme_file_uri() . '/assets/css/build/single-post.css');
            wp_enqueue_style('single-post');
        }

        // if (is_singular('post-type')) {
        //     // enqueue single post type styles
        // }

        // if (is_post_type_archive('post-type')) {
        //     // enqueue post type's archive styles
        // }

        // if (get_page_template_slug() === 'page-slug' || is_page('page-slug')) {
        //     // enqueue specific page styles
        // }
    }

    function add_public_modules($tag, $handle, $src)
    {
        /**
         * Turns all javascript files pointed in the $scripts array into ES6 modules
         * All scripts must be registered before its handle is passed to the $scripts array
         */

        $scripts = array(
            '',
        );

        foreach ($scripts as $key => $script) {
            if ($script === $handle) {
                $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
            }
        }

        return $tag;
    }
}
