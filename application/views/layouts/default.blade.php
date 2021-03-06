<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<!-- Mobile Devices -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Urbanización Villas de Aragua</title>

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

				<div class="top-header text-right">

					<div class="social">
						<a href="#" class="ico-twitter">{{ HTML::image('img/twitter-icon.png') }}</a> 
						<a href="#" class="ico-facebook">{{ HTML::image('img/facebook-icon.png') }}</a>
						<a href="#" class="ico-google-plus">{{ HTML::image('img/rss-icon.png') }}</a>
					</div>

				</div>

			</div>

		</div>
		
		<!-- Navbar -->
		<div class="navbar" id="nav-follow">
			
			<div class="navbar-inner">
				
				<div class="container">

					<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><i class="icon-th-list"></i></a> 
					<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="brand">Navbar</a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						
						<ul class="nav">
							
							<li class="dropdown active">{{ HTML::link('index','Inicio',array('title' => 'Inicio')) }} <span>Página principal</span></li>

							<li class="dropdown">{{ HTML::link('nosotros/index','La urbanización',array('title' => 'La urbanización')) }}<b class="caret"></b> <span>Villas de Aragua</span>
								
								<ul>
									
									<li>{{ HTML::link('nosotros/historia','Historia',array('title' => 'Historia')) }}</li>
									<li>{{ HTML::link('nosotros/filosofia','Filosofia',array('title' => 'Filosofia')) }}</li>
									<li>{{ HTML::link('nosotros/galeria','Galería de fotos',array('title' => 'Galería de fotos')) }}</li>
									<li>{{ HTML::link('nosotros/condominio','Junta de condominio',array('title' => 'Junta de condominio')) }}</li>
								
								</ul>
							
							</li>              
						 
							<li class="dropdown">{{ HTML::link('/','Información',array('title' => 'Información')) }} <b class="caret"></b><span>Programaciones</span>

								<ul>
									
									<li>{{ HTML::link('informacion/reuniones','Asambleas y reuniones',array('title' => 'Asambleas y reuniones')) }}</li>
									<li>{{ HTML::link('informacion/partidas','Egresos e ingresos',array('title' => 'Egresos e ingresos')) }}</li>
									<li>{{ HTML::link('informacion/documentos','Documentos',array('title' => 'Documentos')) }}</li>
									<li>{{ HTML::link('informacion/proyectos','Proyectos',array('title' => 'Proyectos')) }}</li>
								
								</ul>

							</li>
							
							<li class="dropdown">{{ HTML::link('foro/index','Foro',array('title' => 'Foro')) }} <span>Comunidad</span></li>

							<li class="dropdown">{{ HTML::link('contacto/index','Contacto',array('title' => 'Contacto')) }} <span>Comuníquese con nosotros</span></li>

							<li class="dropdown">{{ HTML::link('login','Iniciar sesión',array('title' => 'Iniciar sesión')) }} <span>Ingrese a su cuenta</span></li>
						
						</ul>

					</div>
				
				</div>
			
			</div>
		
		</div>
	
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