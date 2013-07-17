<?php
class Admin_recibos_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Recibos - Sistema Administrativo JG-Sigcon';
		$x = 1;

		$recibos = DB::table('tadm_recibo')
			->join('tadm_metodopag','tadm_metodopag.id','=','tadm_recibo.metodopag_id')
			->get(array('tadm_recibo.id','parcela_nro','fecha','monto','tadm_metodopag.descripcion','anulada'));

		return View::make('administracion.recibos.index')
			->with('title',$title)
			->with('recibos',$recibos)
			->with('x',$x);
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
		$x = 1;

		$formas = DB::table('tadm_metodopag')->get();

		return View::make('administracion.recibos.formaspay')
			->with('title',$title)
			->with('formas',$formas)
			->with('x',$x);
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
		$title = 'Formas de Pago - Recibos - Sistema Administrativo JG-Sigcon';
		$x = 1;

		$formaspay = Input::get('formaspay');

		$insert_formas = DB::table('tadm_metodopag')
			->insert(array('descripcion' => $formaspay));

		if($insert_formas === TRUE) { return Redirect::to('admin/recibos/formaspay'); }

		return View::make('administracion.recibos.formaspay')
			->with('title',$title)
			->with('x',$x);
	}
}

?>