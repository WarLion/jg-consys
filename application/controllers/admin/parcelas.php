<?php
class Admin_parcelas_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Parcelas - Sistema Administrativo JG-Consys';
		$x = 1;

		$parcelas = DB::table('tadm_parcela')
			->order_by('nro','asc')
			->get();

		return View::make('administracion.parcelas.index')
			->with('title',$title)
			->with('x',$x)
			->with('parcelas',$parcelas);
	}

	public function get_agregar()
	{
		$title = 'Agregar - Parcelas - Sistema Administrativo JG-Consys';
		$message = null;

		$calles = DB::table('tadm_calles')->get();

		return View::make('administracion.parcelas.agregar')
			->with('title',$title)
			->with('message',$message)
			->with('calles',$calles);
	}

	public function get_calles()
	{
		$title = 'Agregar - Calles - Sistema Administrativo JG-Consys';
		$message = null;
		$x = 1;

		/*if($redirect === TRUE) {
			$message = "Se ha registrado satisfactoriamente.";
		}*/

		$calles = DB::table('tadm_calles')->get();

		return View::make('administracion.parcelas.calles')
			->with('title',$title)
			->with('message',$message)
			->with('calles',$calles)
			->with('x',$x);
	}

	public function post_index()
	{
		
	}

	public function post_agregar()
	{
		$title = 'Agregar - Parcelas - Sistema Administrativo JG-Consys';
		$message = null;

		$parcela 	= Input::get('parcela');
		$calle 		= Input::get('calle');
		$mts 		= Input::get('mts');
		$alicuota 	= Input::get('alicuota');
		$condicion 	= Input::get('condicion');
		
		$calles = DB::table('tadm_calles')->get();		

		if($parcela == null) {
			$message = "Por favor, ingrese el número de parcela.";

			return View::make('administracion.parcelas.agregar')
			->with('title',$title)
			->with('message',$message)
			->with('calles',$calles);
		}

		$parcelas = DB::table('tadm_parcela')
			->insert(array('nro' 			=> $parcela,
							'calle' 		=> $calle,
							'alicuota' 		=> $alicuota,
							'mts'			=> $mts,
							'habitada'		=> $condicion,
							'fecha_ing'		=> date("d-m-Y H:i:s")
			));

		if($parcelas === TRUE) {
			$message = "Se ha registrado satisfactoriamente.";
		}
		else {
			$message = "Ha ocurrido un problema.";
		}

		return View::make('administracion.parcelas.agregar')
			->with('title',$title)
			->with('message',$message)
			->with('calles',$calles);	
	}

	public function post_calles()
	{
		$title = 'Agregar - Calles - Sistema Administrativo JG-Consys';
		$message = null;
		$x = 1;

		$calle 			= Input::get('calle');
		$mtslargo 		= Input::get('mtslargo');
		$mtsancho 		= Input::get('mtsancho');	

		if($calle == null) {
			$message = "Por favor, ingrese el nombre de la calle.";

			return View::make('administracion.parcelas.calles')
			->with('title',$title)
			->with('message',$message)
			->with('x',$x);
		}

		$calles = DB::table('tadm_calles')
			->insert(array('nombre' 	=> $calle,
							'mtslargo' 	=> $mtslargo,
							'mtsancho' 	=> $mtsancho
			));

		if($calles === TRUE) {
			$redirect = TRUE;
			return Redirect::to('admin/parcelas/calles')->with('redirect',$redirect);
		}
		else {
			$message = "Ha ocurrido un problema.";
		}

		return View::make('administracion.parcelas.calles')
			->with('title',$title)
			->with('message',$message)
			->with('x',$x);
	}

}

?>