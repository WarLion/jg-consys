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
		$message = null;

		return View::make('administracion.propietarios.agregar')
			->with('title',$title)
			->with('message',$message);
	}

	public function post_index()
	{
		
	}

	public function post_detalle()
	{
		
	}

	public function post_agregar()
	{
		$title = 'Agregar - Sistema Administrativo JG-Sigcon';
		$message = null;

		$cedula 	= Input::get('cedula');
		$nombre 	= Input::get('nombre');
		$sexo 		= Input::get('sexo');
		$celular 	= Input::get('celular');
		$casa 		= Input::get('casa');
		$email 		= Input::get('email');
		$parcela 	= Input::get('parcela');
		$fechan 	= Input::get('fechan');
		$fechai 	= date("d-m-Y H:i:s");

		$form = array($cedula,$nombre,$parcela);

		// verifica que los campos no esten vacios
		foreach($form as $frm)
		{		
			if(empty($frm))
			{
				$message = "No puede dejar campos vacios.";
				
				return View::make('administracion.propietarios.agregar')
					->with('title',$title)
					->with('message',$message);
			}
		}

		$propietarios = DB::table('tadm_propietarios')
			->where('ci','=',$cedula)
			->get();

		if(empty($propietarios))
		{
			$message = "Propietario se ha registrado satisfactoriamente.";

			DB::table('tadm_propietarios')
				->insert(array('ci' 		=> $cedula,
								'nombre' 	=> $nombre,
								'sexo'		=> $sexo,
								'tlf_cel' 	=> $celular,
								'tlf_casa'	=> $casa,
								'email'		=> $email,
								'fecha_nac'	=> $fechan,
								'fecha_ing' => $fechai,
								'actual' 	=> "1"));

			DB::table('tadm_agrupar')
				->insert(array('propietarios_ci'	=> $cedula,
								'parcela_nro' 		=> $parcela));
		}
		else
		{
			$message = "Propietario ya existe.";
		}

		return View::make('administracion.propietarios.agregar')
			->with('title',$title)
			->with('message',$message);
	}
}

?>