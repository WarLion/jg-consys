<?php
class Admin_parcelas_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Parcelas - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.parcelas.index')->with('title',$title);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Parcelas - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.parcelas.agregar')->with('title',$title);
	}

	public function get_calles()
	{
		$title = 'Calles - Parcelas - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.parcelas.calles')->with('title',$title);
	}

	public function post_index()
	{
		
	}

	public function post_agregar()
	{
		
	}

	public function post_calles()
	{
		
	}
}

?>