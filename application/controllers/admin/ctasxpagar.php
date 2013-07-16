<?php
class Admin_CtasxPagar_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		$x = 1;

		$ctasxpagar = DB::table('tadm_ctasxpagar')
			->select(array('tadm_proveedor.nro','tadm_proveedor.descripcion','tadm_ctasxpagar.cancelado',DB::raw('SUM(tadm_ctasxpagar.monto) as monto')))
			->join('tadm_proveedor','tadm_proveedor.nro','=','tadm_ctasxpagar.proveedor_nro')
			->where('cancelado','=','0')
			->group_by('tadm_ctasxpagar.proveedor_nro')
			->order_by('tadm_ctasxpagar.proveedor_nro', 'desc')
			->get();

		return View::make('administracion.ctasxpagar.index')
			->with('title',$title)
			->with('x',$x)
			->with('ctasxpagar',$ctasxpagar);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		$message = null;

		return View::make('administracion.ctasxPagar.agregar')
			->with('title',$title)
			->with('message',$message);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.detalle')->with('title',$title);
	}

	public function get_documento()
	{
		$title = 'Tipos de Documento - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		$message= null;
		$x = 1;

		$documento = DB::table('tadm_tipodoc')->get();

		return View::make('administracion.ctasxPagar.documento')
			->with('title',$title)
			->with('x',$x)
			->with('message',$message)
			->with('documento',$documento);
	}

	public function get_pagos()
	{
		$title = 'Pagos - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		$x = 1;

		$pagos = DB::table('tadm_pagos')
			->select(array('tadm_proveedor.descripcion as proveedor','tadm_metodopag.descripcion as metodopag','fecha','monto'))
			->join('tadm_proveedor','tadm_proveedor.nro','=','tadm_pagos.proveedor_nro')
			->join('tadm_metodopag','tadm_metodopag.id','=','tadm_pagos.metodopag_id')
			->order_by('tadm_pagos.id', 'asc')
			->get();

		return View::make('administracion.ctasxPagar.pagos')
			->with('title',$title)
			->with('x',$x)
			->with('pagos',$pagos);
	}

	public function get_detallePagos()
	{
		$title = 'Detalle Pagos - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.ctasxPagar.detallePagos')->with('title',$title);
	}

	public function get_pagar()
	{
		$title = 'Registrar Pago- Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		$message = null;
		$x = 1;

		$rif = Input::get('rif');

		$proveedor = DB::table('tadm_proveedor')
			->where('nro','=',$rif)
			->get(array('nro','descripcion'));

		$detalle_prov = DB::table('tadm_ctasxpagar')
			//->join('tadm_tipodoc','tadm_tipodoc.id','=','tadm_ctasxpagar.tipodoc_id')
			->where('proveedor_nro','=',$rif)
			->where('cancelado','=','0')
			//->get(array('nro','concepto_codigo','tadm_tipodoc.descripcion','monto'));
			->get(array('nro','concepto_codigo','fecha','monto'));

		return View::make('administracion.ctasxPagar.registrar')
			->with('title',$title)
			->with('proveedor',$proveedor)
			->with('x',$x)
			->with('rif',$rif)
			->with('message',$message)
			->with('detalle_prov',$detalle_prov);
	}

	public function post_index()
	{
		
	}

	public function post_agregar()
	{
		$title = 'Agregar - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		$message = null;
		$x = 1;

		$buscar = Input::get('buscar');
		$add	= Input::get('agregar');

		// Buscar proveedor
		if(!empty($buscar)) 
		{
			$proveedor = Input::get('proveedor');

			$buscar_proveedor = DB::table('tadm_proveedor')
				->where('nro','=',$proveedor)
				->or_where('descripcion','=',$proveedor)
				->get();

			foreach($buscar_proveedor as $bprv)
			{
				$id_prov['id'] = $bprv->nro;
			}

			if(!empty($buscar_proveedor)) {

				//$tipo = DB::table('tadm_tipodoc')->get();

				$total = DB::table('tadm_ctasxpagar')
					->select(array(DB::raw('SUM(tadm_ctasxpagar.monto) as monto')))
					->where('proveedor_nro','=',$id_prov['id'])
					->where('cancelado','=','0')
					->group_by('tadm_ctasxpagar.proveedor_nro')
					->get();

				$ctasxpagar = DB::table('tadm_ctasxpagar')
					//->join('tadm_tipodoc','tadm_tipodoc.id','=','tadm_ctasxpagar.tipodoc_id')
					->where('proveedor_nro','=',$id_prov['id'])
					->where('cancelado','=','0')
					//->get(array('nro','concepto_codigo','tadm_tipodoc.descripcion','monto'));
					->get(array('nro','concepto_codigo','monto'));

				return View::make('administracion.ctasxpagar.agregar')
					->with('title',$title)
					->with('x',$x)
					->with('message',$message)
					->with('proveedor',$buscar_proveedor)
					//->with('tipo',$tipo)
					->with('total',$total)
					->with('ctasxpagar',$ctasxpagar);
			}
			else {
				$message = "El proveedor no existe.";

				return View::make('administracion.ctasxpagar.agregar')
					->with('title',$title)
					->with('message',$message);
			}
		}

		// Agregar cuentas por pagar
		if(!empty($add)) 
		{
			$identificacion = Input::get('hidentificacion');
			$proveedor 		= Input::get('hproveedor');
			$referencia 	= Input::get('referencia');
			$concepto 		= Input::get('concepto');
			$tipo 			= Input::get('tipo');
			$monto 			= Input::get('monto');

			$form = array($referencia, $concepto, $monto);

			foreach($form as $frm)
			{
				if(empty($frm))
				{
					$message = "Por favor complete todos los campos.";

					return View::make('administracion.ctasxpagar.agregar')
						->with('title',$title)
						->with('message',$message);
				}
			}

			$buscar_referencia = DB::table('tadm_ctasxpagar')
				->where('nro','=',$referencia)
				->get();

			if(!empty($buscar_referencia))
			{
				$message = "El nro de referencia ya existe.";

				return View::make('administracion.ctasxPagar.agregar')
					->with('title',$title)
					->with('message',$message);
			}
			else
			{
				DB::table('tadm_ctasxpagar')
					->insert(array('nro' 				=> $referencia,
									'proveedor_nro' 	=> $identificacion,
									'concepto_codigo' 	=> $concepto,
									'tipodoc_id'		=> $tipo,
									'fecha'				=> date("d-m-Y H:i:s"),
									'fecha_pago'		=> null,
									'monto'				=> $monto,
									'cancelado'			=> '0',
									'anular'			=> '0'));

				$message = "Se ha registrado satisfactoriamente.";

				/*$total = DB::table('tadm_ctasxpagar')
					->select(array(DB::raw('SUM(tadm_ctasxpagar.monto) as monto')))
					->group_by('tadm_ctasxpagar.proveedor_nro')
					->get();

				$ctasxpagar = DB::table('tadm_ctasxpagar')
					->join('tadm_tipodoc','id','=','tadm_ctasxpagar.tipodoc_id')
					->where('proveedor_nro','=',$identificacion)
					->get(array('nro','concepto_codigo','tadm_tipodoc.descripcion','monto'));*/

				return View::make('administracion.ctasxPagar.agregar')
					->with('title',$title)
					->with('message',$message);
					//->with('total',$total)
					//->with('ctasxpagar',$ctasxpagar);
			}
		}
	}

	public function post_detalle()
	{
		
	}
	
	public function post_documento()
	{
		$title = 'Tipos de Documento - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		$message= null;
		$x = 1;

		$documento = Input::get('documento');

		if(empty($documento))
		{
			$message = "No puede dejar campos vacíos.";

			return View::make('administracion.ctasxpagar.documento')
				->with('title',$title)
				->with('x',$x)
				->with('message',$message);
		}
		else
		{
			DB::table('tadm_tipodoc')
				->insert(array('descripcion' => $documento));

			$message = "Se ha registrado satisfactoriamente.";

			return Redirect::to('admin/ctasxpagar/documento');
		}

		return View::make('administracion.ctasxpagar.documento')
			->with('title',$title)
			->with('x',$x)
			->with('message',$message);
	}

	public function post_pagos()
	{
		
	}

	public function post_detallePagos()
	{
		
	}

	public function post_pagar()
	{
		$title = 'Registrar Pago - Cuentas por Pagar - Sistema Administrativo JG-Sigcon';
		$message = null;
		$x = 1;

		$rif 			= Input::get('rif');
		$monto 			= Input::get('monto');
		$fecha 			= date("d-m-Y H:i:s");
		$selectMontos	= Input::get();

		// Si no se ha seleccionado ningun concepto...
		if(empty($monto))
		{
			$message = "Por favor, seleccione el o los conceptos a pagar. ";

			$proveedor = DB::table('tadm_proveedor')
				->where('nro','=',$rif)
				->get(array('nro','descripcion'));

			$detalle_prov = DB::table('tadm_ctasxpagar')
				//->join('tadm_tipodoc','tadm_tipodoc.id','=','tadm_ctasxpagar.tipodoc_id')
				->where('proveedor_nro','=',$rif)
				//->get(array('nro','concepto_codigo','tadm_tipodoc.descripcion','monto'));
				->get(array('nro','concepto_codigo','fecha','monto'));

			return View::make('administracion.ctasxpagar.registrar')
				->with('title',$title)
				->with('x',$x)
				->with('proveedor',$proveedor)
				->with('rif',$rif)
				->with('message',$message)
				->with('detalle_prov',$detalle_prov);
		}
		else
		{
			$efectivo 		= Input::get('efectivo');
			$deposito 		= Input::get('deposito');
			$cheque 		= Input::get('cheque');
			$transferencia 	= Input::get('transferencia');
			$debito 		= Input::get('debito');
			$credito 		= Input::get('credito');

			// Si la forma de pago es efectivo...
			if(!empty($efectivo))
			{
				// Inserta el pago
				DB::table('tadm_pagos')
					->where('proveedor_nro','=',$rif)
					->insert(array('proveedor_nro' 	=> $rif,
									'metodopag_id' 	=> '1',
									'fecha' 		=> $fecha,
									'monto'			=> $monto));

				// Me muestra el ultimo ID del pago del proveedor
				$pagos = DB::table('tadm_pagos')
					->where('proveedor_nro','=',$rif)
					->max('id');

				$pago_id = (array) $pagos;

				foreach($selectMontos as $smon)
				{
					DB::table('tadm_ctasxpagar')
						->where('nro','=',$smon)
						->update(array('fecha_pago' => $fecha,
										'pagos_id'	=> $pagos,
										'cancelado'	=> '1'));
				}

				$message = "El pago se ha registrado satisfactoriamente.";

				return View::make('administracion.ctasxPagar.registrar')
					->with('title',$title)
					->with('x',$x)
					->with('message',$message);
			}

			// Si la forma de pago es deposito...
			if(!empty($deposito))
			{

			}

			// Si la forma de pago es cheque...
			if(!empty($cheque))
			{

			}

			// Si la forma de pago es transferencia...
			if(!empty($transferencia))
			{

			}

			// Si la forma de pago es debito...
			if(!empty($debito))
			{

			}

			// Si la forma de pago es credito...
			if(!empty($credito))
			{

			}
		}

		
	}
}

?>