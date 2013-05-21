<?php
class Login_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		return View::make('login.index')->with('title','Iniciar sesión');
	}

	public function post_index()
	{
		
	}	

}

?>