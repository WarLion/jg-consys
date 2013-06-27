<?php
class Admin_CtasxPagar_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.index')->with('title',$title);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.agregar')->with('title',$title);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.detalle')->with('title',$title);
	}

	public function get_documento()
	{
		$title = 'Tipos de Documento - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.documento')->with('title',$title);
	}

	public function get_pagos()
	{
		$title = 'Pagos - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.pagos')->with('title',$title);
	}

	public function get_detallePagos()
	{
		$title = 'Detalle Pagos - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.detallePagos')->with('title',$title);
	}

	public function get_pagar()
	{
		$title = 'Registrar Pago- Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.registrar')->with('title',$title);
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
	
	public function post_documento()
	{
		
	}

	public function post_pagos()
	{
		
	}

	public function post_detallePagos()
	{
		
	}

	public function post_pagar()
	{
		
	}
}

?>