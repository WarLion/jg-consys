<?php
class Admin_propietarios_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Propietarios - Sistema Administrativo JG-Sigcon';
		$x = 1;

		$propietarios = DB::table('tadm_propietarios')
			->join('tadm_agrupar','tadm_agrupar.propietarios_ci','=','tadm_propietarios.ci')
			->order_by('parcela_nro','asc')
			->get();

		return View::make('administracion.propietarios.index')
			->with('title',$title)
			->with('x',$x)
			->with('propietarios',$propietarios);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.propietarios.detalle')->with('title',$title);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.propietarios.agregar')->with('title',$title);
	}

	public function post_index()
	{
		
	}

	public function post_detalle()
	{
		
	}

	public function post_agregar()
	{
		
	}
}

?>