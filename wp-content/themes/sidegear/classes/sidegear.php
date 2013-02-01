<?php
/**
 * Sidegear - core of Mister Machine Base Theme
 *
 * @package WordPress
 * @subpackage sidegear
 */

/**
 * class Sidegear
 * 
 */
class Sidegear {
	
	/**
	 * init() Initialisation method which calls all other methods in turn.
	 *
	 */
	function init() {
		$theme = new Sidegear;
		$theme->environment();
		do_action( 'framework_init' );
	}
	
	/**
	 * enviroment() defines Sidegear directory constants
	 *
	 */
	function environment() {
		define( 'CSS', get_bloginfo('template_directory') . '/assets/css', true );
		define( 'IMAGES', get_bloginfo('template_directory') . '/assets/img', true );
		define( 'JS', get_bloginfo('template_directory') . '/assets/js', true );
		
		// URI shortcuts
		define( 'THEME', get_bloginfo( 'template_url' ), true );
		
		do_action( 'environment' ); // Available action: load_environment
		
		// Register our custom menus
		if ( function_exists('register_nav_menus') )
		{
			register_nav_menus( array(
				'main_menu' => __('Main Menu'),
				'local_menu' => __('Local Menu'),
				'footer_menu' => __('Footer Menu'),
				'social_widgets_menu' => __('Social Widgets Menu')
			));
		}

		// Register sidebar widgets
		if ( function_exists('register_sidebar') )
		{
			register_sidebar(array(
				'name' => 'Header Sidebar',
				'id' => 'smw-header-sidebar'
			));
			register_sidebar(array(
				'name' => 'Footer Social',
				'id' => 'smw-footer-social'
			));
			register_sidebar(array(
				'name' => 'Sidebar Left',
				'id' => 'smw-sidebar-left'
			));
			register_sidebar(array(
				'name' => 'Sidebar Right',
				'id' => 'smw-sidebar-right'
			));
		}
	}

	function sg_register_post_types(){
		// Register custom post types
		if ( function_exists('register_post_type') ) {
			register_post_type(
				'project', 
				array( 'label' => 'Projects', 
					'description' => 'Projects',
					'public' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					'capability_type' => 'post',
					'hierarchical' => false,
					'rewrite' => array('slug' => 'projects', 'with_front' => false),
					'query_var' => true,
					'has_archive' => true,
					'supports' => array('title',
						'excerpt',
						'editor',
						'trackbacks',
						'custom-fields',
						'revisions',
						'thumbnail',
						'post-formats'),
					'taxonomies' => array('category', 'post_tag'),
					'labels' => array ('name' => 'Projects',
						'singular_name' => 'Project',
						'menu_name' => 'Projects',
						'add_new' => 'Add Project',
						'add_new_item' => 'Add New Project',
						'edit' => 'Edit',
						'edit_item' => 'Edit Project',
						'new_item' => 'New Project',
						'view' => 'View Project',
						'view_item' => 'View Project',
						'search_items' => 'Search Projects',
						'not_found' => 'No Projects Found',
						'not_found_in_trash' => 'No Projects Found in Trash',
						'parent' => 'Parent Project')
				)
			);
		}
	}
}
?>