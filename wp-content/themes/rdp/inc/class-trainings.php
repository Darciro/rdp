<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'Trainings' ) ) :

	class Trainings {

		public function init() {
			add_action( 'init', array( $this, 'add_custom_type_training' ) );
			add_action( 'init', array( $this, 'add_training_taxonomies' ) );
			add_action( 'init', array( $this, 'custom_rewrite_basic' ) );
			add_action( 'acf/init', array( $this, 'training_custom_blocks' ) );
			// add_action( 'wp_footer', array( $this, 'meks_which_template_is_loaded' ) );

			add_filter( 'template_include', array( $this, 'filter_training_routes' ), 99 );
		}

		public function add_custom_type_training() {

			$labels = array(
				'name'               => 'Capacitações',
				'singular_name'      => 'Capacitação',
				'add_new'            => 'Nova capacitação',
				'add_new_item'       => 'Nova capacitação',
				'edit_item'          => 'Editar capacitação',
				'new_item'           => 'Nova capacitação',
				'all_items'          => 'Todas as capacitações',
				'view_item'          => 'Ver capacitação',
				'search_items'       => 'Buscar capacitação',
				'not_found'          => 'Nenhuma capacitação encontrada',
				'not_found_in_trash' => 'Nenhuma capacitação encontrada na lixeira',
				'parent_item_colon'  => '',
				'menu_name'          => 'Capacitações',
			);

			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_rest'       => true,
				'show_in_menu'       => true,
				'show_in_nav_menus'  => true,
				'query_var'          => true,
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => _( 5 ),
				'menu_icon'          => 'dashicons-clipboard',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
				'rewrite'            => array( 'slug' => 'capacitacoes' )

			);

			register_post_type( 'capacitacao', $args );
			flush_rewrite_rules();
		}

		public function add_training_taxonomies() {
			$labels = array(
				'name'          => 'Tipos de capacitações',
				'singular_name' => 'Tipo de capacitação'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'show_in_menu'      => true,
				'rewrite'           => array( 'slug' => 'capacitacoes' )
			);

			register_taxonomy( 'tipo', 'capacitacao', $args );
			flush_rewrite_rules();
		}

		public function custom_rewrite_basic() {
			add_rewrite_rule( '^capacitacoes/([^/]+)/?$', 'index.php?taxonomy=tipo&tipo=$matches[1]', 'top' );
			add_rewrite_rule( '^capacitacoes/([^/]+)/([^/]+)/?$', 'index.php?post_type=capacitacao&capacitacao=$matches[2]', 'top' );
		}

		public function meks_which_template_is_loaded() {
			if ( is_super_admin() ) {
				global $template;
				echo '<pre>';
				print_r( $template );
				echo '</pre>';
			}
		}

		public function filter_training_routes( $template ) {
			global $wp_query;

			if ( get_query_var( 'post_type' ) === 'capacitacao' ) {
				if ( get_term_by( 'slug', $wp_query->query_vars['name'], 'tipo' ) ) {
					return get_taxonomy_template();
				}
			}

			return $template;
		}

		public function training_custom_blocks() {
			// check function exists
			if ( function_exists( 'acf_register_block_type' ) ) {

				// register a testimonial block
				acf_register_block_type( array(
					'name'            => 'training-info',
					'title'           => 'Informações extras',
					'description'     => 'Adicione mais informações sobre a capacitação',
					// 'render_callback' => array( $this, 'my_acf_block_render_callback' ),
					'render_template' => 'template-parts/blocks/content-training-info.php',
					'category'        => 'formatting',
					'icon'            => 'excerpt-view',
					'keywords'        => array( 'Estrutura', 'Certificação', 'Inscrição e seleção', 'Turmas em andamento' ),
					'mode'          => 'preview',
					'supports'      => [
						'jsx'           => true, // this is the line that makes it work
					]
				) );
			}
		}

		public function my_acf_block_render_callback( $block ) {

			// convert name ("acf/testimonial") into path friendly slug ("testimonial")
			$slug = str_replace( 'acf/', '', $block['name'] );

			// include a template part from within the "template-parts/block" folder
			if ( file_exists( get_theme_file_path( "/template-parts/blocks/content-{$slug}.php" ) ) ) {
				include( get_theme_file_path( "/template-parts/blocks/content-{$slug}.php" ) );
			}
		}

	}

	( new Trainings() )->init();

endif;
