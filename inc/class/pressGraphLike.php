<?php

/**
 * PressGraphLike class.
 */
 
class PressGraphLike{
	protected $oldOptions, $oldValues, $settings;
	private   $upgrade;
	public    $likeButton, $header, $link;

	public function __construct(){
		$this->loadSettings();
		return $this;
	}

	/**
	 * loadSettings function.
	 *
	 * @package PressGraph
	 * @description Creates like button Object
	 * @access public
	 * @return object
	 */

	public function initLike(){

		$HTML5 = '<div class="fb-like" data-href="'.$this->link.'" '.($this->settings['send'] == '' ? 'data-send="false"' : 'data-send="'.$this->settings['send'].'"').' '.($this->settings['width'] == '' ? 'data-width="450"' : 'data-width="'.$this->settings['width'].'"').' '.($this->settings['face'] == '' ? 'data-show-faces="false"' : 'data-show-faces="'.$this->settings['face'].'"').' '.($this->settings['verb'] == '' ? '' : 'data-action="'.$this->settings['verb'].'"').' '.($this->settings['color'] == '' ? '' : 'data-colorscheme="'.$this->settings['color'].'"').' '.($this->settings['font'] == '' ? '' : 'data-font="'.$this->settings['font'].'"').'	'.($this->settings['layout'] == '' ? '' : 'data-layout="'.$this->settings['layout'].'"').'></div>';



		$XFBML = '<fb:like href="'.$this->link.'" '.($this->settings['send'] == '' ? 'send="false"' : 'send="'.$this->settings['send'].'"').' '.($this->settings['width'] == '' ? 'width="450"' : 'width="'.$this->settings['width'].'"').' '.($this->settings['face'] == '' ? 'show_faces="false"' : 'show_faces="'.$this->settings['face'].'"').' '.($this->settings['verb'] == '' ? '' : 'action="'.$this->settings['verb'].'"').' '.($this->settings['color'] == '' ? '' : 'colorscheme="'.$this->settings['color'].'"').' '.($this->settings['font'] == '' ? '' : 'font="'.$this->settings['font'].'"').' '.($this->settings['layout'] == '' ? '' : 'layout="'.$this->settings['layout'].'"').'></fb:like>';

		if($this->settings['type'] == 'html5'){
			$this->likeButton = $HTML5;
		}else{
			$this->likeButton = $XFBML;
		}

		return $this;
	}



	/**
	 * headerData function.
	 * @package PressGraph
	 * @description Returns the header data for the button
	 * @access public
	 * @return object
	 */
	public function headerData(){
		$this->header = '<div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId='.$settings['appid'].'"; fjs.parentNode.insertBefore(js, fjs); }(document, "script", "facebook-jssdk"));</script>';

		return $this;
	}

	/**
	 * loadSettings function.
	 *
	 * @package PressGraph
	 * @description Loads Current Settings
	 * @access public
	 * @return object
	 */
	public function loadSettings(){
		$this->settings = get_option('PressGraph_Like_Options');
		return $this;
	}

	public function initShortCode(){}

	public function adminPanel(){}
	
	
	/**
	 * updateOptions function.
	 * 
	 * @package PressGraph
	 * @access public
	 * @param mixed $newOptions
	 * @return void
	 */
	public function updateOptions($newOptions){
		$this->loadSettings();
		if(empty($this->settings)){
			$this->settings = $newOptions;
		}else{
			$this->settings = array_replace($this->settings, $newOptions);
		}
		update_option('PressGraph_Like_Options', $this->settings);
		
		return $this;
	}
	
	/**
	 * upgradeSettings function.
	 *
	 * @package PressGraph
	 * @description Used to upgrade from old 2.0+ settings structure to the new optimised structure.
	 * @access public
	 * @return object
	 */
	public function upgradeSettings(){
		$upgrade = add_option('PressGraph_Like_Options', $this->oldValues);
		if($upgrade){
			$this->upgrade = true;
		}else{
			$this->upgrade = false;
		}

		return $this;
	}

	/**
	 * loadOldOptionsSettings function.
	 *
	 * @package PressGraph
	 * @description Used to load old 2.0+ settings structure
	 * @access public
	 * @return object
	 */
	public function loadOldOptionsSettings(){
		$this->oldValues = array();

		foreach($this->oldOptions as $key => $option){
			$this->oldValues[$key] = get_option('fb_like_'.$key);
		}

		return $this;
	}


	/**
	 * getOldOptions function.
	 * @package PressGraph
	 * @access public
	 * @return void
	 */
	public function getOldOptions(){
		$this->oldOptions = array(
			'appid'  => 'appid', //AppID
			'type'   => 'type', //Button Type
			'pos'    => 'pos', //Position
			'layout' => 'layout', //Layout
			'face'   => 'face', //Show Faces
			'verb'   => 'verb', //Verb to display
			'color'  => 'color', //Button Color
			'width'  => 'width', //Container Width
			'height' => 'height', //Container Height
			'ht'     => 'ht', //Height Type px or em
			'css'    => 'css', //Container CSS Class
			'home'   => 'home', //Show in home
			'page'   => 'page', //Show in pages
			'post'   => 'post',  //show in posts
			'cat'    => 'cat',   // show in cats
			'arch'   => 'arch', // show in archive
			'admeta' => 'admeta',
			'dimage' => 'dimage',
			'enimg'  => 'enimg',
			'align'  => 'align',
			'social' => 'social',
			'add'    => 'add',
			'font'   => 'font',
			'font'   => 'font',
			'local'  => 'local'
		);
		
		return $this;
	}
}

?>