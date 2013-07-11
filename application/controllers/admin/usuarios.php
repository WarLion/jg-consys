<?php
class Admin_usuarios_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Usuarios - Sistema Administrativo JG-Sigcon';
		$x=1;

		$us_propietarios = DB::table('tcns_usuarios')
			->join('tadm_propietarios','tadm_propietarios.ci','=','tcns_usuarios.ci')
			->join('tcns_gruposus','tcns_gruposus.id','=','tcns_usuarios.grupous_id')
			->get();

		$us_anonimo = DB::table('tcns_usuarios')
			->where('parcela_nro','=','0')
			->join('tcns_gruposus','tcns_gruposus.id','=','tcns_usuarios.grupous_id')
			->get();

		return View::make('administracion.usuarios.index')
			->with('title',$title)
			->with('us_propietarios',$us_propietarios)
			->with('us_anonimo',$us_anonimo)
			->with('x',$x);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Usuarios - Sistema Administrativo JG-Sigcon';
		$x=1;
		$message = null;

		// para que las variables no esten indefinidas en la vista
		$propietarios = array('parcela_nro' => null,
								'nombre' 	=> null,
								'tlf_cel' 	=> null,
								'email' 	=> null,
								'ci'		=> null);

		// mostrar grupos
		$grupos = DB::table('tcns_gruposus')->get();

		return View::make('administracion.usuarios.agregar')
			->with('title',$title)
			->with('grupos',$grupos)
			->with('x',$x)
			->with('message',$message)
			->with('propietarios',$propietarios);
	}

	public function get_detalle()
	{
		$title = 'Detalle - usuarios - Sistema Administrativo JG-Sigcon';
		return View::make('administracion.usuarios.detalle')->with('title',$title);
	}

	public function post_index()
	{
		
	}

	public function post_agregar()
	{
		$title = 'Agregar - Usuarios - Sistema Administrativo JG-Sigcon';
		$x=1;
		$message = null;

		// Para captar valor del boton que se presiono
		$buscar 	= Input::get('buscar');
		$agregar 	= Input::get('agregar');

		// mostrar grupos
		$grupos = DB::table('tcns_gruposus')->get();

		// si se presiono el boton buscar...
		if(!empty($buscar))
		{
			$cedula = Input::get('cedula');

			// buscar propietario
			$buscar_propietarios = DB::table('tadm_propietarios')
				->where('ci','=',$cedula)
				->get();

			// se alamacenan los datos del array objeto a un array convencional
			foreach ($buscar_propietarios as $bprp) {
				$propietarios = array('parcela_nro' => null,
										'nombre' 	=> $bprp->nombre,
										'sexo' 		=> $bprp->sexo,
										'tlf_cel' 	=> $bprp->tlf_cel,
										'email' 	=> $bprp->email,
										'ci'		=> $bprp->ci);
			}

			// si no existe el propietario...
			if(empty($propietarios))
			{
				$message = "El propietario no existe.";

				$propietarios['parcela_nro'] 	= null;
				$propietarios['nombre'] 		= null;
				$propietarios['sexo'] 			= null;
				$propietarios['tlf_cel'] 		= null;
				$propietarios['email'] 			= null;
				$propietarios['ci'] 			= null;
			}
			else
			{// si existe, buscar nro de parcela del propietario
				$parcela = DB::table('tadm_agrupar')
					->where('propietarios_ci','=',$propietarios['ci'])
					->get();

				// se guardar de un array objeto al convencional
				foreach ($parcela as $prc) {
					$propietarios['parcela_nro'] = $prc->parcela_nro;
				}
			}

			return View::make('administracion.usuarios.agregar')
				->with('title',$title)
				->with('propietarios',$propietarios)
				->with('x',$x)
				->with('grupos',$grupos)
				->with('message',$message);
		}

		if(!empty($agregar))
		{
			$parcela 	= Input::get('parcela');
			$cedula 	= Input::get('cedula');
			$nombre 	= Input::get('nombre');
			$sexo 		= Input::get('sexo');
			$email 		= Input::get('email');
			$telefono 	= Input::get('telefono');
			$usuario 	= Input::get('usuario');
			$contrasena	= Hash::make(Input::get('contrasena'));
			$grupo 		= Input::get('grupo');
			$codigo 	= "sadadfcxxzcxczxHHSDjj2e8898";
			$fecha 		= date("d-m-Y H:i:s");

			$form_anonimo 		= array($cedula,$nombre,$sexo,$email,$telefono,$usuario,$contrasena,$grupo);
			$form_propietario 	= array($parcela,$cedula,$usuario,$contrasena,$grupo);

			// para que las variables no queden indefinidas y las casillas no muestren nada
			$propietarios = array('parcela_nro' => null,
									'nombre' 	=> null,
									'sexo' 		=> null,
									'tlf_cel' 	=> null,
									'email' 	=> null,
									'ci' 		=> null);

			//  buscar propietario
			$buscar_propietarios = DB::table('tadm_propietarios')
				->where('ci','=',$cedula)
				->get();

			//  buscar usuarios
			$buscar_usuarios = DB::table('tcns_usuarios')
				->where('ci','=',$cedula)
				->get();

			// si existe el propietario...
			if(!empty($buscar_propietarios))
			{
				// verifica que los campos no esten vacios si existen propietarios
				foreach($form_propietario as $frm)
				{		
					if(empty($frm))
					{
						$message = "No puede dejar campos vacios.";
						
						return View::make('administracion.usuarios.agregar')
							->with('title',$title)
							->with('grupos',$grupos)
							->with('x',$x)
							->with('message',$message)
							->with('propietarios',$propietarios);
					}
				}

				// si el usuario no se ha creado
				if(empty($buscar_usuarios))
				{
					// insertar
					DB::table('tcns_usuarios')
						->insert(array('parcela_nro' 	=> $parcela,
										'ci' 			=> $cedula,
										'nick' 			=> $usuario,
										'password' 		=> $contrasena,
										'grupous_id'	=> $grupo,
										'codigo_reg'	=> $codigo,//++++
										'fecha_reg' 	=> $fecha,
										'activo' 		=> '1'
							));

					$message = "Se ha registrado satisfactoriamente.";
				}
				else
				{
					$message = "Usuario ya existe";
				}
			}
			else
			{
				// verifica que los campos no esten vacios si son anonimos, es decir, no propietarios
				foreach($form_anonimo as $frm)
				{		
					if(empty($frm))
					{
						$message = "No puede dejar campos vacios.";
						
						return View::make('administracion.usuarios.agregar')
							->with('title',$title)
							->with('grupos',$grupos)
							->with('x',$x)
							->with('message',$message)
							->with('propietarios',$propietarios);
					}
				}

				// si el usuario no se ha creado...
				if(empty($buscar_usuarios))
				{
					// insertar
					DB::table('tcns_usuarios')
						->insert(array('parcela_nro' 	=> $parcela,
										'ci' 			=> $cedula,
										'nombre' 		=> $nombre,
										'sexo' 			=> $sexo,
										'email' 		=> $email,
										'telefono' 		=> $telefono,
										'nick' 			=> $usuario,
										'password' 		=> $contrasena,
										'grupous_id'	=> $grupo,
										'codigo_reg'	=> $codigo,//++++
										'fecha_reg' 	=> $fecha,
										'activo' 		=> '1'
							));

					$message = "Se ha registrado satisfactoriamente.";
				}
				else
				{
					$message = "Usuario ya existe.";
				}
			}

			return View::make('administracion.usuarios.agregar')
				->with('title',$title)
				->with('x',$x)
				->with('grupos',$grupos)
				->with('message',$message)
				->with('propietarios',$propietarios);
		}
	}

	public function post_detalle()
	{
		
	}
}

?>