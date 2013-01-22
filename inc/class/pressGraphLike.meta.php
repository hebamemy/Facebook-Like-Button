<?php

class PressGraphMeta{

	
	public $id, $title, $callback, $pageID;

		
	/**
	 * __construct function.
	 * 
	 * @access public
	 * @param mixed $id
	 * @param mixed $title
	 * @param mixed $callback
	 * @param mixed $pageID
	 * @return void
	 */
	public function __construct($id, $title, $callback, $pageID){
		$this->id = $id;
		$this->title = $title;
		$this->callback = $callback;
		$this->pageID = $pageID;
	}
	
	
	/**
	 * createMeta function.
	 * 
	 * @access public
	 * @return void
	 */
	public function createMeta(){
		
	}

}

?>