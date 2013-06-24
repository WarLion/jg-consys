<?php
class Administracion_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();

	}

	public function get_index()
	{
		return View::make('administracion.index')->with('title','Sistema Administrativo');
	}

	public function post_index()
	{
		
	}	

}

?>