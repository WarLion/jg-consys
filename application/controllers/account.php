<?php
class Account_Controller extends Base_Controller {

	public $restful = true;

	public function __construct() {
		parent::__construct();
	}

	public function get_index()
	{
		$title = 'Estado de Cuenta - Urbanización Villas de Aragua';
		return View::make('account.index')->with('title',$title);
	}

	public function get_pagos()
	{
		$title = 'Reporte de Pagos Realizados - Urbanización Villas de Aragua';
		return View::make('account.pagos')->with('title',$title);
	}

	public function post_index()
	{
		
	}	

}

?>