<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

if (!class_exists('Scripts')) :

	class Scripts
	{
		public $env;

		public function __construct()
		{
			$this->env = wp_get_environment_type();
		}

		public function init()
		{
			add_action('wp_enqueue_scripts', array($this, 'rdp_styles'));
			add_action('wp_enqueue_scripts', array($this, 'rdp_scripts'));
			add_action('wp_enqueue_scripts', array($this, 'add_vars_to_script'));
			add_action('login_enqueue_scripts', array($this, 'rdp_styles'));
		}

		public function rdp_styles()
		{
			$bundle_css = ($this->env !== 'production') ? 'bundle.css' : 'bundle.min.css';
			wp_enqueue_style('rdp-style', get_template_directory_uri() . '/assets/stylesheets/dist/' . $bundle_css, array(), RDP_VERSION);
			wp_style_add_data('rdp-style', 'rtl', 'replace');
		}

		public function rdp_scripts()
		{
			$bundle_js = ($this->env !== 'production') ? 'main.js' : 'main.min.js';
			wp_enqueue_script('rdp-scripts', get_template_directory_uri() . '/assets/js/dist/' . $bundle_js, array('jquery'), RDP_VERSION, true);
		}

		public function add_vars_to_script() {
			wp_localize_script( 'rdp-scripts', 'RDP',
				array(
					'ajax_url' => admin_url( 'admin-ajax.php' ),
					'rdp_nonce' => wp_create_nonce('rdp-get-patient-data-nonce'),
				)
			);
		}

	}

	(new Scripts())->init();

endif;
