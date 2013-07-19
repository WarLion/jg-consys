<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<!-- Mobile Devices -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{ $title; }} - Urbanización Villas de Aragua</title>

	{{ Asset::styles() }}

</head>

<body>

<div class="section">

	<div class="container"> 
		
		<!-- Header -->
		<div class="row">

			<div class="span6">

				<p class="logo"><a href="{{ URL::to('/') }}"> {{ HTML::image('img/index/logo.png') }} </a></p>

			</div>

			<div class="span6">

				<div class="top-header text-right"><em>call us (123) 456 7890 - <a href="#">my@mail.com</a></em>

					<div class="social"> 
						<a href="#" class="ico-twitter">{{ HTML::image('img/twitter-icon.png') }}</a> 
						<a href="#" class="ico-facebook">{{ HTML::image('img/facebook-icon.png') }}</a>
						<a href="#" class="ico-google-plus">{{ HTML::image('img/rss-icon.png') }}</a>
					</div>

				</div>

			</div>

		</div>
	
	<hr />

	</div>

	@yield('content')

	<div class="section">

		<div class="container"> 
		
			<div class="row">

				<div class="span12">

					<div class="footer">

						<hr />

						<div class="row show-grid">
							
							<div class="span5" data-original-title="" title="">
								&copy; 2013 <strong>Junta de Propietarios de Villas de Aragua
								<br />Todos los derechos reservados.
							</div>

							<div class="span7" data-original-title="" title="">
								<div class="text-right">Sitio Web Desarrollado por: <strong>{{ HTML::mailto('juliet.garcia@outlook.com','Juliet Garcia' ) }}</strong></div>
							</div>
							
						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- Go to top page -->
	<div id="toTop">Top</div>

		{{ Asset::scripts() }}

		@yield('postscript')

</body>

</html>