<?php
class Admin_proveedores_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Proveedores - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.proveedores.index')->with('title',$title);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Proveedores - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.proveedores.agregar')->with('title',$title);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Proveedores - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.proveedores.detalle')->with('title',$title);
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