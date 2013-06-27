<?php
class Admin_recibos_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Recibos - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.recibos.index')->with('title',$title);
	}

	public function get_generar()
	{
		$title = 'Generar recibos - Recibos - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.recibos.generar')->with('title',$title);
	}

	public function get_generar_pago()
	{
		$title = 'Forma de Pago - Recibos - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.recibos.generar_pago')->with('title',$title);
	}

	public function get_generar_imprimir()
	{
		$title = 'Procesar - Recibos - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.recibos.generar_imprimir')->with('title',$title);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Recibos - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.recibos.detalle')->with('title',$title);
	}

	public function get_bancos()
	{
		$title = 'Bancos - Recibos - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.recibos.bancos')->with('title',$title);
	}

	public function get_formaspay()
	{
		$title = 'Formas de Pago - Recibos - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.recibos.formaspay')->with('title',$title);
	}

	public function post_index()
	{
		
	}

	public function post_generar()
	{
		
	}

	public function post_bancos()
	{
		
	}
	
	public function post_formaspay()
	{
		
	}
}

?>