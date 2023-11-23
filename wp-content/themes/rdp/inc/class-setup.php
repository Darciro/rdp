<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

if (!class_exists('Setup')) :
    class Setup
    {
        public $version = '1.3.3';
        public $theme_slug = 'rdp';

        public function __construct()
        {
            $this->define('RDP_VERSION', $this->version);
            $this->define('RDP_SLUG', $this->theme_slug);
            $this->define('RDP_PATH', get_template_directory());
        }

        public function init()
        {
            // Includes the functions used trough out the site
            // require_once RDP_PATH . '/inc/utility-functions.php';

            add_filter('acf/settings/save_json', array($this, 'get_local_json_path'));
            add_filter('acf/settings/load_json', array($this, 'add_local_json_path'));
            add_filter('use_block_editor_for_post', '__return_false');

            add_action('after_setup_theme', array($this, 'rdp_i18n'));
            add_action('after_setup_theme', array($this, 'rdp_theme_support'));
            add_action('after_setup_theme', array($this, 'rdp_menus'));
            add_action('wp_default_scripts', array($this, 'disable_jquery_migrate_warnings'));
            add_action('enqueue_block_editor_assets', array($this, 'disable_editor_fullscreen_mode'));
            add_action('acf/init', array($this, 'theme_options'));
            add_action('admin_menu', array($this, 'exclude_admin_menu_items'));
        }

        /**
         * Loads i18n options
         * @return void
         */
        public function rdp_i18n()
        {
            load_theme_textdomain('rdp', get_template_directory() . '/languages');
        }

        /**
         * Theme support
         * @return void
         */
        public function rdp_theme_support()
        {
            add_theme_support('title-tag');
            add_theme_support('post-thumbnails');
            add_theme_support(
                'html5',
                array(
                    'search-form',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                )
            );

            // Define custom sizes for our thumbs
            add_image_size('carousel-banner', 1200, 560, true);
            add_image_size('news-thumb', 640, 425, true);
        }

        /**
         * Registrates our main menu
         * @return void
         */
        public function rdp_menus()
        {
            register_nav_menus(
                array(
                    'main-navigation' => esc_html__('Main navigation', 'rdp'),
                )
            );
        }

        public function define($name, $value = true)
        {
            if (!defined($name)) {
                define($name, $value);
            }
        }

        public function disable_jquery_migrate_warnings($scripts)
        {
            if (!empty($scripts->registered['jquery'])) {
                $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
            }
        }

        /**
         * Define where the local JSON is saved
         *
         * @return string
         */
        public function get_local_json_path($paths)
        {
            return RDP_PATH . '/assets/acf-json';
        }

        /**
         * Add our path for the local JSON
         *
         * @param array $paths
         *
         * @return array
         */
        public function add_local_json_path($paths)
        {
            $paths[] = RDP_PATH . '/assets/acf-json';

            return $paths;
        }

        public function disable_editor_fullscreen_mode()
        {
            $script = "window.onload = function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } }";
            wp_add_inline_script('wp-blocks', $script);
        }

        /**
         * Register our theme options page
         *
         * @return void
         */
        public function theme_options()
        {

            // Check function exists.
            if (function_exists('acf_add_options_sub_page')) {

                acf_add_options_sub_page(array(
                    'page_title' => 'Opções do tema',
                    'menu_title' => 'Opções do tema',
                    'parent_slug' => 'options-general.php',
                    'capability' => 'administrator'
                ));
            }
        }

        /**
         * Excluding menu items based on our saved options
         *
         * @return void
         */
        public function exclude_admin_menu_items()
        {
            if (current_user_can('administrator'))
                return;

            $menu_items_to_exclude = explode(',', str_replace(' ', '', get_field('excluded_menu_pages', 'option')));
            foreach ($menu_items_to_exclude as $menu_item) {
                remove_menu_page($menu_item);
            }
        }

    }

    (new Setup())->init();

endif;