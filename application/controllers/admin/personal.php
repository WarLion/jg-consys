<?php
class Admin_personal_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Personal - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.personal.index')->with('title',$title);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Personal - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.personal.agregar')->with('title',$title);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Personal - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.personal.detalle')->with('title',$title);
	}

	public function get_cargos()
	{
		$title = 'Cargos - Personal - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.personal.cargos')->with('title',$title);
	}

	public function post_index()
	{
		
	}

	public function post_agregar()
	{
		
	}

	public function post_detalle()
	{
		
	}
}

?>