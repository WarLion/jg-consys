<?php
class Admin_Administracion_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();

	}

	public function get_index()
	{
		$x=1;

		// Para mostrar las deudas actuales de todos los propietarios que deben
		$ctasxcobrar = DB::table('tadm_ctasxcobrar')
			->select(array('tadm_propietarios.nombre','tadm_ctasxcobrar.parcela_nro',DB::raw('SUM(tadm_ctasxcobrar.monto) as monto')))			
			->join('tadm_agrupar','tadm_agrupar.parcela_nro','=','tadm_ctasxcobrar.parcela_nro')
			->join('tadm_propietarios','tadm_agrupar.propietarios_ci','=','tadm_propietarios.ci')
			->group_by('tadm_ctasxcobrar.parcela_nro')
			->order_by('monto', 'desc')
			->take(8)
			->get();

		return View::make('administracion.index')
			->with('title','Sistema Administrativo JG-Consys')
			->with('ctasxcobrar',$ctasxcobrar)
			->with('x',$x);
	}

	public function post_index()
	{
		
	}	

}

?>