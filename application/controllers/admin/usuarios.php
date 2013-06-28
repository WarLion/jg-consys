<?php
class Admin_usuarios_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Usuarios - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.usuarios.index')->with('title',$title);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Usuarios - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.usuarios.agregar')->with('title',$title);
	}

	public function get_detalle()
	{
		$title = 'Detalle - usuarios - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.usuarios.detalle')->with('title',$title);
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