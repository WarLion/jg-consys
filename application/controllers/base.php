<?php

class Base_Controller extends Controller {

	public function __construct() {

		// Styles
		Asset::add('bootstrap','css/bootstrap.min.css');
		Asset::add('bootstrap-responsive','css/bootstrap-responsive.min.css');
		Asset::add('styles','css/style.css');
		Asset::add('slides','css/slides.css');
		Asset::add('masonry','css/masonry.css');
		Asset::add('fancybox','css/fancybox.css');
		Asset::add('custom','css/colors/custom.css');
		Asset::add('water','css/colors/green.css');
		Asset::add('font_oswald','css/fonts/font_oswald.css');
		Asset::add('style_custom','css/style_custom.css');

		// Javascripts files
		Asset::add('jquery','js/jquery.js');
		Asset::add('bootstrap','js/bootstrap.min.js');
		Asset::add('slides','js/slides.min.js');
		Asset::add('masonry','js/masonry.min.js');
		Asset::add('fancybox','js/fancybox.js');
		Asset::add('functions','js/functions.js');

	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}