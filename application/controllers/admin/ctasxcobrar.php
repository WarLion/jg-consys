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

		// Para mostrar conceptos en el select
		$conceptos = DB::table('tadm_conceptos')->get(array('codigo','nombre','monto'));

		// Variables en null cuando no se hace ninguna peticion
		$parcela 		= null;
		$propietario 	= null;
		$ctasxcobrar 	= null;
		$txtParcela 	= null;

		// Envia los parametros por GET
		return View::make('administracion.ctasxcobrar.agregar')
			->with('title',$title)
			->with('conceptos',$conceptos)
			->with('parcela',$parcela)
			->with('txtParcela',$txtParcela)
			->with('propietario',$propietario)
			->with('ctasxcobrar',$ctasxcobrar);
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

		// Variables de los Input del formulario
		$txtParcela = 		Input::get('parcela');
		$hidden_parcela = 	Input::get('hidden_parcela');
		$add = 				Input::get('add');

		// Para mostrar conceptos en el select
		$conceptos = DB::table('tadm_conceptos')->get(array('codigo','nombre','monto'));

		// Para mostrar los datos del propietario que se busca
		$propietario = DB::table('tadm_propietarios')
			->where('parcela_nro','=',$txtParcela)
			->join('tadm_agrupar','tadm_propietarios.ci','=','tadm_agrupar.propietarios_ci')
			->get(array('nombre','ci'));

		// Para mostrar las deudas actuales del propietario que se busca
		$ctasxcobrar = DB::table('tadm_ctasxcobrar')
			->where('parcela_nro','=',$txtParcela)
			->join('tadm_conceptos','tadm_ctasxcobrar.concepto_codigo','=','tadm_conceptos.codigo')
			->get(array('tadm_ctasxcobrar.concepto_codigo','tadm_conceptos.nombre','tadm_ctasxcobrar.monto'));

		// Suma el monto de los conceptos que debe el propietario
		$sum_monto = DB::table('tadm_ctasxcobrar')
			->where('parcela_nro','=',$txtParcela)
			->join('tadm_conceptos','tadm_ctasxcobrar.concepto_codigo','=','tadm_conceptos.codigo')
			->sum('tadm_ctasxcobrar.monto');

		// Si se oprime el boton Agregar...
		if(!empty($add))
		{
			// Lee los datos de los Input
			$monto = Input::get('monto');
			$codigo = Input::get('valueConcepto');

			// Inserta una nueva deuda o concepto...
			$insert_ctasxcobrar = DB::table('tadm_ctasxcobrar')->insert(array('parcela_nro' 		=> $txtParcela,
																				'concepto_codigo' 	=> $codigo,
																				'fecha' 			=> '25/06/2013',
																				'monto' 			=> $monto));
		}

		// Envia los parametros por POST
		return View::make('administracion.ctasxcobrar.agregar')
			->with('title',$title)
			->with('conceptos',$conceptos)
			->with('txtParcela',$txtParcela)
			->with('propietario',$propietario)
			->with('ctasxcobrar',$ctasxcobrar)
			->with('sum_monto',$sum_monto);
	}

	public function post_detalle()
	{
		
	}

}

?>