<?php
class Personal_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Datos personales - Urbanización Villas de Aragua';
		return View::make('personal.index')->with('title',$title);
	}

	public function post_index()
	{
		
	}	

}

?>