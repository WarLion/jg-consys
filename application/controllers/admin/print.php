<?php
class Admin_print_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_recibos()
	{
		$title = 'Recibos - Sistema Administrativo JG-Consys';
		$total = 0;

		$recibo_print = Session::get('detalle');
		$rec_conceptos = Session::get('rec_conceptos');
		
		return View::make('administracion.prints.recibos')
			->with('title',$title)
			->with('recibo_print',$recibo_print)
			->with('rec_conceptos',$rec_conceptos)
			->with('total',$total);
	}

	public function post_recibos()
	{
		
	}

}

?>