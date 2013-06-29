<?php
class Admin_Ctasxcobrar_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Cuentas por Cobrar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxcobrar.index')->with('title',$title);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Cuentas por Cobrar - Sistema Administrativo JG-Sigcon';

		$conceptos = DB::table('tadm_conceptos')->get(array('nombre','monto'));

		$parcela = null;
		$propietario = null;

		return View::make('administracion.ctasxcobrar.agregar')
			->with('title',$title)
			->with('conceptos',$conceptos)
			->with('parcela',$parcela)
			->with('propietario',$propietario);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Cuentas por Cobrar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxcobrar.detalle')->with('title',$title);
	}

	public function post_index()
	{
		
	}

	public function post_agregar()
	{
		$title = 'Agregar - Cuentas por Cobrar - Sistema Administrativo JG-Sigcon';

		$conceptos = DB::table('tadm_conceptos')->get(array('nombre','monto'));

		$txtParcela = Input::get('parcela');

		$propietario = DB::table('tadm_propietarios')
			->where('parcela_nro','=',$txtParcela)
			->join('tadm_agrupar','tadm_propietarios.ci','=','tadm_agrupar.propietarios_ci')
			->get(array('nombre','ci'));

		return View::make('administracion.ctasxcobrar.agregar')
			->with('title',$title)
			->with('conceptos',$conceptos)
			->with('parcela',$txtParcela)
			->with('propietario',$propietario);
	}

	public function post_detalle()
	{
		
	}

}

?>