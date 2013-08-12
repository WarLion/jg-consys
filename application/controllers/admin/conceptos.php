<?php
class Admin_conceptos_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Conceptos - Sistema Administrativo JG-Consys';
		$x = 1;

		// Para mostrar conceptos en el select
		$conceptos = DB::table('tadm_conceptos')
						->order_by('codigo','desc')
						->get(array('codigo','nombre','monto'));

		return View::make('administracion.conceptos.index')
			->with('title',$title)
			->with('conceptos',$conceptos)
			->with('x',$x);
	}

	public function post_index()
	{
		
	}

}

?>