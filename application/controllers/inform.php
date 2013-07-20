<?php
class Inform_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Informar Pago - Urbanización Villas de Aragua';
		return View::make('inform.index')->with('title',$title);
	}

	public function post_index()
	{
		
	}	

}

?>