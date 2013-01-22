<?php

/**
 * PressGraphLikeAdmin class.
 * @package PressGraph
 */

require_once('pressGraphLike.custom.php');

class PressGraphLikeAdmin extends PressGraphLikeCustom{

	static $adminSettings;

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct(){
		parent::__construct();
		self::$adminSettings = $this->settings;
		add_action( 'add_meta_boxes', array(__CLASS__,'addAdvancedMetaBoxes'));
	}

	/**
	 * layout function.
	 *
	 * @access public
	 * @return void
	 */
	public function layout(){
		//Read HTML from layout file
		$settings = self::$adminSettings;
		$content = include(plugin_dir_path( __FILE__ ) . '/misc/likeAdminLayout.php');
	}


	/**
	 * menu function.
	 *
	 * @access public
	 * @return void
	 */
	public function menu(){
		add_menu_page('PressGraph Like Settings', 'Facebook Like', 8, basename(__file__), '' , plugins_url('/misc/icon.png',__FILE__));
		add_submenu_page(basename(__file__), 'PressGraph Button Settings', 'Like Button', 8, basename(__file__), array(__CLASS__, 'layout'));
	}
	
	
	public function addAdvancedMetaBoxes(){
		$id = 'live-preview-box';
		$title = 'live-preview-box';
		add_meta_box( $id, $title, array(__CLASS__, 'AdvancedMetaContent'), "PressGraphLikeSettings");
	}
	
	public function AdvancedMetaContent(){
		?><h1>craap</h1><?php
	}
	
}

?>