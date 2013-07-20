<?php
class Documents_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Solicitud de Documentos - Urbanización Villas de Aragua';
		return View::make('documents.index')->with('title',$title);
	}

	public function post_index()
	{
		
	}	

}

?>