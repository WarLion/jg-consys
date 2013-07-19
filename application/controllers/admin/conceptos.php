<?php
class Admin_conceptos_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Conceptos - Sistema Administrativo JG-Consys';
		return View::make('administracion.conceptos.index')->with('title',$title);
	}

	public function post_index()
	{
		
	}

}

?>