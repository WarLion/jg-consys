<?php
class Admin_recibos_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Recibos - Sistema Administrativo JG-Consys';
		$x = 1;

		$recibos = DB::table('tadm_recibo')
			->join('tadm_pagos','tadm_pagos.id','=','tadm_recibo.pagos_id')
			->join('tadm_metodopag','tadm_metodopag.id','=','tadm_pagos.metodopag_id')
			->get(array('tadm_recibo.id','parcela_nro','tadm_pagos.fecha','tadm_pagos.monto','tadm_metodopag.descripcion','anulada'));

		return View::make('administracion.recibos.index')
			->with('title',$title)
			->with('recibos',$recibos)
			->with('x',$x);
	}

	public function get_generar()
	{
		$title = 'Generar recibos - Recibos - Sistema Administrativo JG-Consys';
		$message = null;
		$parcela = null;
		$ci = null;
		$name = null;

		return View::make('administracion.recibos.generar')
			->with('title',$title)
			->with('parcela',$parcela)
			->with('ci',$ci)
			->with('name',$name)
			->with('message',$message);
	}

	public function get_generar_pago()
	{
		return Redirect::to('admin/recibos/generar');
	}

	public function get_generar_imprimir()
	{
		return Redirect::to('admin/recibos/generar');
	}

	public function get_detalle()
	{
		$title = 'Detalle - Recibos - Sistema Administrativo JG-Consys';
		$total = 0;

		$id = Input::get('id');

		$result = array('tadm_recibo.parcela_nro',
						'tadm_agrupar.propietarios_ci',
						'tadm_propietarios.nombre as nom_prop',
						'tadm_pagos.fecha',
						'tadm_pagos.monto as mon_pago',
						'tadm_metodopag.descripcion',
						'tadm_conceptos.nombre as nom_conc',
						'tadm_ctasxcobrar.monto as mon_ctas');

		$recibo = DB::table('tadm_recibo')
					->where('tadm_recibo.id','=',$id)
					->join('tadm_pagos','tadm_pagos.id','=','tadm_recibo.pagos_id')
					->join('tadm_agrupar','tadm_agrupar.parcela_nro','=','tadm_recibo.parcela_nro')
					->join('tadm_propietarios','tadm_propietarios.ci','=','tadm_agrupar.propietarios_ci')
					->join('tadm_metodopag','tadm_metodopag.id','=','tadm_pagos.metodopag_id')
					->join('tadm_ctasxcobrar','tadm_ctasxcobrar.pagos_id','=','tadm_pagos.id')
					->join('tadm_conceptos','tadm_conceptos.codigo','=','tadm_ctasxcobrar.concepto_codigo')
					->get($result);

		foreach($recibo as $rec)
		{
			$detalle = $rec;
		}

		$rec_conceptos = $recibo;

		// variables para imprimir recibos
		Session::put('detalle',$detalle);
		Session::put('rec_conceptos',$rec_conceptos);

		return View::make('administracion.recibos.detalle')
			->with('title',$title)
			->with('total',$total)
			->with('detalle',$detalle)
			->with('recibo',$recibo);
	}

	public function get_bancos()
	{
		$title = 'Bancos - Recibos - Sistema Administrativo JG-Consys';
		return View::make('administracion.recibos.bancos')->with('title',$title);
	}

	public function get_formaspay()
	{
		$title = 'Formas de Pago - Recibos - Sistema Administrativo JG-Consys';
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
		$title = 'Generar recibos - Recibos - Sistema Administrativo JG-Consys';
		$message = null;
		$x = 1;

		$parcela = Input::get('parcela');

		// busca el nro de parcela para mostrar los datos del propietario
		$propietario = DB::table('tadm_agrupar')
			->where('parcela_nro','=',$parcela)
			->join('tadm_propietarios','tadm_propietarios.ci','=','tadm_agrupar.propietarios_ci')
			->get(array('tadm_agrupar.propietarios_ci','tadm_propietarios.nombre'));

		// verifica si la busqueda es verdadera
		if(empty($propietario)) 
		{ 
			$message = "El nro de parcela no existe.";
		}
		else
		{
			// Para mostrar las deudas actuales del propietario que se busca
			$ctasxcobrar = DB::table('tadm_ctasxcobrar')
				->where('parcela_nro','=',$parcela)
				->join('tadm_conceptos','tadm_ctasxcobrar.concepto_codigo','=','tadm_conceptos.codigo')
				->where('pagos_id','=','0')
				->get(array('tadm_ctasxcobrar.concepto_codigo','tadm_conceptos.nombre','tadm_ctasxcobrar.fecha','tadm_ctasxcobrar.monto'));

			// Suma el monto de los conceptos que debe el propietario
			$sum_monto = DB::table('tadm_ctasxcobrar')
				->where('parcela_nro','=',$parcela)
				->join('tadm_conceptos','tadm_ctasxcobrar.concepto_codigo','=','tadm_conceptos.codigo')
				->sum('tadm_ctasxcobrar.monto');

			return View::make('administracion.recibos.generar')
				->with('title',$title)
				->with('x',$x)
				->with('message',$message)
				->with('parcela',$parcela)
				->with('propietario',$propietario)
				->with('ctasxcobrar',$ctasxcobrar)
				->with('sum_monto',$sum_monto);
		}

		return View::make('administracion.recibos.generar')
			->with('title',$title)
			->with('message',$message);
	}

	public function post_generar_pago()
	{
		$title = 'Forma de Pago - Recibos - Sistema Administrativo JG-Consys';
		$y = 0;

		$generar = array('parcela' 	=> Input::get('hparcela'), // recibe valores de peticion anterior -- luego se cambiara por variables Session
						'ci' 		=> Input::get('hci'),		// recibe valores de peticion anterior -- luego se cambiara por variables Session
						'name' 		=> Input::get('hnombre'),	// recibe valores de peticion anterior -- luego se cambiara por variables Session
						'monto' 	=> Input::get('monto')
					);

		// recibe todas las variables
		$nro_conceptos = Input::get(); 

		foreach($nro_conceptos as $ncon)
		{
			// se busca el nro de concepto
			$concept_positivo = DB::table('tadm_ctasxcobrar')
									->where('parcela_nro','=',$generar['parcela'])
									->where('pagos_id','=','0')
									->where('concepto_codigo','=',$ncon)
									->get(array('concepto_codigo'));

			// si el concepto existe
			if(!empty($concept_positivo))
			{
				foreach($concept_positivo as $cp)
				{
					// se guardan exclusivamente en otra variable los codigos
					$y++;
					$conceptos[$y] =  array('codigo' => $cp->concepto_codigo);
				}
			}
		}

		// se guarda el array conceptos en una variable session
		Session::put('conceptos',$conceptos);

		return View::make('administracion.recibos.generar_pago')
			->with('title',$title)
			->with('generar',$generar);
	}

	public function post_generar_imprimir()
	{
		$title = 'Procesar - Recibos - Sistema Administrativo JG-Consys';
		$fecha = date("d-m-Y");
		$y = 0;
		$total_conceptos = 0;
		$message = null;

		$procesar = Input::get('procesar');

		// si presiono el boton Procesar...
		if(!empty($procesar))
		{
			$generarPay 		= Session::get('generarPay');
			$total_conceptos 	= Session::get('total_conceptos');
			$num_con 			= Session::get('num_con');
			$conceptos 			= Session::get('conceptos');
			$nombre_con 		= Session::get('nombre_con');
			$fecha				= date("d-m-Y");
			$title 				= 'Recibos - Sistema Administrativo JG-Consys';

			if(!empty($generarPay['efectivo']))
			{
				DB::table('tadm_pagos')
					->insert(array('metodopag_id' 	=> '1',
									'identificacion'=> $generarPay['parcela'],
									'referencia'	=> '0',
									'banco'			=> '0',
									'partida'		=> 'ingreso',
									'fecha'			=> $fecha,
									'monto'			=> $total_conceptos));

				/*return View::make('administracion.prints.recibos_generar')
					->with('generarPay',$generarPay)
					->with('total_conceptos',$total_conceptos)
					->with('num_con',$num_con)
					->with('conceptos',$conceptos)
					->with('nombre_con',$nombre_con)
					->with('title',$title);*/
			}

			if(!empty($generarPay['deposito']))
			{
				DB::table('tadm_pagos')
					->insert(array('metodopag_id' 	=> '2',
									'identificacion'=> $generarPay['parcela'],
									'referencia'	=> '0',
									'banco'			=> '0',
									'partida'		=> 'ingreso',
									'fecha'			=> $fecha,
									'monto'			=> $total_conceptos));
			}

			if(!empty($generarPay['cheque']))
			{
				DB::table('tadm_pagos')
					->insert(array('metodopag_id' 	=> '3',
									'identificacion'=> $generarPay['parcela'],
									'referencia'	=> '0',
									'banco'			=> '0',
									'partida'		=> 'ingreso',
									'fecha'			=> $fecha,
									'monto'			=> $total_conceptos));
			}

			if(!empty($generarPay['trasnferencia']))
			{
				DB::table('tadm_pagos')
					->insert(array('metodopag_id' 	=> '4',
									'identificacion'=> $generarPay['parcela'],
									'referencia'	=> '0',
									'banco'			=> '0',
									'partida'		=> 'ingreso',
									'fecha'			=> $fecha,
									'monto'			=> $total_conceptos));
			}

			if(!empty($generarPay['debito']))
			{
				DB::table('tadm_pagos')
					->insert(array('metodopag_id' 	=> '5',
									'identificacion'=> $generarPay['parcela'],
									'referencia'	=> '0',
									'banco'			=> '0',
									'partida'		=> 'ingreso',
									'fecha'			=> $fecha,
									'monto'			=> $total_conceptos));
			}

			if(!empty($generarPay['credito']))
			{
				DB::table('tadm_pagos')
					->insert(array('metodopag_id' 	=> '6',
									'identificacion'=> $generarPay['parcela'],
									'referencia'	=> '0',
									'banco'			=> '0',
									'partida'		=> 'ingreso',
									'fecha'			=> $fecha,
									'monto'			=> $total_conceptos));
			}
				// Me muestra el ultimo ID del pago del proveedor
				$pagos = DB::table('tadm_pagos')
					->where('identificacion','=',$generarPay['parcela'])
					->where('partida','=','ingreso')
					->max('id');

				$recibo = DB::table('tadm_recibo')
						->insert(array('parcela_nro'=> $generarPay['parcela'],
										'pagos_id' 	=> $pagos,
										'anulada' 	=> '0'));

				for($y=1; $y<=$num_con; $y++)
				{
					$ctasxcobrar = DB::table('tadm_ctasxcobrar')
										->where('parcela_nro','=',$generarPay['parcela'])
										->where('concepto_codigo','=',$conceptos[$y]['codigo'])
										->update(array('pagos_id' => $pagos));
				}


				return Redirect::to('admin/recibos/generar');
		}
		else
		{
			$generarPay = array('parcela' 		=> Input::get('hparcela'),
								'ci' 			=> Input::get('hci'),
								'name' 			=> Input::get('hname'),
								'monto' 		=> Input::get('monto'),
								'efectivo' 		=> Input::get('efectivo'),
								'deposito' 		=> Input::get('deposito'),
								'cheque' 		=> Input::get('cheque'),
								'transferencia' => Input::get('transferencia'),
								'debito' 		=> Input::get('debito'),
								'credito' 		=> Input::get('credito'),
								'fecha'			=> $fecha
						);

			// se recibe el array conceptos
			$conceptos = Session::get('conceptos');
			//se cuenta la cantidad de valores que existe en el array
			$num_con = count($conceptos);

			for($x=1; $x<=$num_con; $x++)
			{
				// se recorre el array para buscar el nombre del concepto en la tabla
				$query_nombre_con = DB::table('tadm_conceptos')
										->where('codigo','=',$conceptos[$x]['codigo'])
										->get(array('nombre','monto'));

				foreach($query_nombre_con as $nc)
				{
					// se guarda los resultados en otra variable que no sea objeto
					$y++;
					$nombre_con[$y] = array('nombre' 	=> $nc->nombre,
											'monto' 	=> $nc->monto);

					$total_conceptos += $nombre_con[$y]['monto'];
				}
			}

			$total_parcela = DB::table('tadm_ctasxcobrar')
								->select(array(DB::raw('SUM(tadm_ctasxcobrar.monto) as monto')))
								->where('parcela_nro','=',$generarPay['parcela'])
								->where('pagos_id','=','0')
								->get(array('monto'));

			foreach($total_parcela as $tp) { $total_parcela = $tp->monto; }

			$adeuda = $total_parcela - $total_conceptos;

			// se cuenta la cantidad de valores
			$num_con = count($nombre_con);

			// se busca cual es el ultimo valor o correlativo de los recibos
			$correlativo = DB::table('tadm_recibo')->max('id');
			$correlativo = $correlativo['id'] + 1;

			Session::put('generarPay',$generarPay);
			Session::put('num_con',$num_con);
			Session::put('total_conceptos',$total_conceptos);
			Session::put('nombre_con',$nombre_con);

			return View::make('administracion.recibos.generar_imprimir')
				->with('title',$title)
				->with('generarPay',$generarPay)
				->with('nombre_con',$nombre_con)
				->with('num_con',$num_con)
				->with('fecha',$fecha)
				->with('adeuda',$adeuda)
				->with('message',$message)
				->with('total_conceptos',$total_conceptos)
				->with('correlativo',$correlativo);
		}
	}

	public function post_bancos()
	{
		
	}
	
	public function post_formaspay()
	{
		$title = 'Formas de Pago - Recibos - Sistema Administrativo JG-Consys';
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