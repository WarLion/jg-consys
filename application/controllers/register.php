<?php
class Register_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		return View::make('register.index')->with('title','Registro');
	}

	public function post_index()
	{
		//$user = ;
	}	

}

?>