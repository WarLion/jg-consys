<?php
class Dashboard_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		return View::make('dashboard.index')->with('title','Escritorio');
	}

	public function post_index()
	{
		
	}	

}

?>