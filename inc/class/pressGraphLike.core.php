<?php


require_once('pressGraphLike.administration.php');

/**
 * Core class.
 * 
 * @extends PressGraph
 */
class PressGraphCore extends PressGraphLikeAdmin{
	
	
	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct(){
		parent::__construct();
		
		add_action('admin_menu', array('PressGraphCore', 'DisablePages'));
		add_action('pre_post_update',  array('PressGraphCore', 'DoLikeDisable'));
		add_action('admin_menu', array('PressGraphCore', 'menu'));
		add_action( 'init', array(__CLASS__, 'registerPostType'));
	}
	
	
	/**
	 * registerPostType function.
	 * 
	 * @access public
	 * @return void
	 */
	public function registerPostType() {
		register_post_type( 'PressGraphLikeSettings',	array('public' => true,'has_archive' => false));
	}
	
}

?>