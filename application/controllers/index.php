<?php

class Index_Controller extends Base_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function action_index()
	{
		return View::make('index');
	}

}