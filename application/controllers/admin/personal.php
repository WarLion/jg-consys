<?php
class Admin_personal_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Personal - Sistema Administrativo JG-Sigcon';
		$x=1;

		// para mostrar personal
		//$personal = DB::table('tadm_personal')->get();

		// Para mostrar cargo
		$personal = DB::table('tadm_personal')
			->join('tadm_cargo','tadm_cargo.id','=','tadm_personal.cargo_id')
			->get();

		return View::make('administracion.personal.index')
			->with('title',$title)
			->with('personal',$personal)
			->with('x',$x);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Personal - Sistema Administrativo JG-Sigcon';
		$message = null;

		$cargos = DB::table('tadm_cargo')->get();

		return View::make('administracion.personal.agregar')
			->with('title',$title)
			->with('message',$message)
			->with('cargos',$cargos);
	}

	public function get_detalle()
	{
		$title = 'Detalle - Personal - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.personal.detalle')->with('title',$title);
	}

	public function get_cargos()
	{
		$title = 'Cargos - Personal - Sistema Administrativo JG-Sigcon';
		$x = 1;
		$message = null;

		$cargos = DB::table('tadm_cargo')->get();

		return View::make('administracion.personal.cargos')
			->with('cargos',$cargos)
			->with('title',$title)
			->with('x',$x);
	}

	public function post_index()
	{
		
	}

	public function post_agregar() 
	{
		$title = 'Agregar - Personal - Sistema Administrativo JG-Sigcon';
		$message = null;

		$cedula 	= Input::get('cedula');
		$nombre 	= Input::get('nombre');
		$sexo 		= Input::get('sexo');
		$celular 	= Input::get('celular');
		$casa 		= Input::get('casa');
		$email 		= Input::get('email');
		$direccion 	= Input::get('direccion');
		$fechan 	= Input::get('fechan');
		$cargo 		= Input::get('cargo');
		$fechai 	= date("d-m-Y H:i:s");

		$form = array($cedula, $nombre, $sexo, $celular, $casa, $email, $direccion, $fechan, $cargo);

		// verifica que los campos no esten vacios
		foreach($form as $frm)
		{		
			if(empty($frm))
			{
				$message = "No puede dejar campos vacios.";
				
				return View::make('administracion.personal.agregar')
					->with('title',$title)
					->with('message',$message);
			}
		}

		// Verifica si existe la persona
		$personal = DB::table('tadm_personal')
			->where('ci','=',$cedula)
			->get();

		if(!empty($personal))
		{
			$message = "Esta persona ya existe.";
		}
		else
		{
			// Parama mostrar los cargos
			$cargos = DB::table('tadm_cargo')->get();

			DB::table('tadm_personal')
				->insert(array('ci' 		=> $cedula,
								'nombre' 	=> $nombre,
								'sexo' 		=> $sexo,
								'tlf_cel' 	=> $celular,
								'tlf_casa' 	=> $casa,
								'email' 	=> $email,
								'direccion' => $direccion,
								'fecha_nac' => $fechan,
								'cargo_id' 	=> $cargo,
								'fecha_ing' => $fechai,
								'activo' 	=> '1'));
		}

		return View::make('administracion.personal.agregar')
			->with('title',$title)
			->with('message',$message)
			->with('cargos',$cargos);
	}

	public function post_detalle()
	{
		
	}

	public function post_cargos()
	{
		$title = 'Cargos - Personal - Sistema Administrativo JG-Sigcon';
		$x = 1;
		$message = null;

		$cargo = Input::get('cargo');

		// Select
		$cargos = DB::table('tadm_cargo')->get();

		// Insert
		$form = array($cargo);

		foreach($form as $frm)
		{		
			if(empty($frm))
			{
				$message = "No puede dejar campos vacios.";
				
				return View::make('administracion.personal.cargos')
					->with('title',$title)
					->with('message',$message);
			}
		}

		$sql_insert = DB::table('tadm_cargo')
			->insert(array('descripcion' => $cargo));

		// Si es correcto el insert, refrescar pagina para mostrar cargos actuales
		if($sql_insert === TRUE)
		{
			return Redirect::to('admin/personal/cargos');
		}

		return View::make('administracion.personal.cargos')
			->with('cargos',$cargos)
			->with('title',$title)
			->with('x',$x);
	}
}

?>