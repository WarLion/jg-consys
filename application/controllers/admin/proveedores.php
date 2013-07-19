<?php
class Admin_proveedores_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Proveedores - Sistema Administrativo JG-Consys';
		$x=1;

		// Para mostrar las deudas actuales de todos los propietarios que deben
		$proveedores = DB::table('tadm_proveedor')->get();

		return View::make('administracion.proveedores.index')
			->with('title',$title)
			->with('proveedores',$proveedores)
			->with('x',$x);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Proveedores - Sistema Administrativo JG-Consys';
		$message = null;
		return View::make('administracion.proveedores.agregar')
			->with('title',$title)
			->with('message',$message);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Proveedores - Sistema Administrativo JG-Consys';
		return View::make('administracion.proveedores.detalle')->with('title',$title);
	}

	public function post_index()
	{
		
	}

	public function post_agregar()
	{
		$title = 'Agregar - Proveedores - Sistema Administrativo JG-Consys';

		$message = null;
		
		$rif 		= Input::get('rif');
		$nombre 	= Input::get('nombre');
		$telefono 	= Input::get('telefono');
		$email 		= Input::get('email');
		$direccion 	= Input::get('direccion');
		$fecha 		= date("d-m-Y H:i:s");

		$form = array($rif, $nombre, $telefono, $email, $direccion, $fecha);

		foreach($form as $frm)
		{		
			if(empty($frm))
			{
				$message = "No puede dejar campos vacios.";
				
				return View::make('administracion.proveedores.agregar')
					->with('title',$title)
					->with('message',$message);
			}
		}

		$proveedor = DB::table('tadm_proveedor')
			->where('nro','=',$rif)
			->get();

		if(!empty($proveedor))
		{
			$message = "Proveedor ya existe.";
		}
		else
		{
			DB::table('tadm_proveedor')
				->insert(array('nro' 			=> $rif,
								'descripcion' 	=> $nombre,
								'direccion' 	=> $direccion,
								'telefono' 		=> $telefono,
								'email' 		=> $email,
								'fecha_ing' 	=> $fecha,
								'activo' 		=> '1'));
		}

		return View::make('administracion.proveedores.agregar')
			->with('title',$title)
			->with('message',$message);
	}

	public function post_detalle()
	{
		
	}
}

?>