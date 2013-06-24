<!DOCTYPE html>
<html lang="en">
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

		<div class="navbar">

			<div class="navbar-inner">

				<div class="container-fluid">

					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<a class="brand" href="#" name="top">Sigcon</a>

					<div class="nav-collapse in collapse" style="height: auto;">

						<ul class="nav">

							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ HTML::image('img/admin.png') }} Administración <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Cuentas por Cobrar</a></li>
									<li><a href="#">Cuentas por Pagar</a></li>
									<li><a href="#">Recibos</a></li>
									<li><a href="#">Conceptos</a></li>
									<li><a href="#">Reportes</a></li>
									<li><a href="#">Estadísticas</a></li>
								</ul>
							</li>

							<li class="divider-vertical"></li>
							<li><a href="#"><i class="icon-home"></i> Parcelas</a></li>

							<li class="divider-vertical"></li>
							<li><a href="#">{{ HTML::image('img/propietarios.png') }} Propietarios</a></li>

							<li class="divider-vertical"></li>
							<li><a href="#"><i class="icon-user"></i> Usuarios</a></li>

							<li class="divider-vertical"></li>
							<li><a href="#"><i class="icon-briefcase"></i> Personal</a></li>

							<li class="divider-vertical"></li>
							<li><a href="#">{{ HTML::image('img/proveedores.png') }} Proveedores</a></li>

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
								&copy; 2013 <strong>JG-Sigcon
								<br />Todos los derechos reservados.
							</div>

							<div class="span7" data-original-title="" title="">
								<div class="text-right">Sitema Desarrollado por: <strong>{{ HTML::mailto('juliet.garcia@outlook.com','Juliet Garcia' ) }}</strong></div>
							</div>
							
						</div>

					</div> 
					
				</div>

			</div>

		</div>

	</div>

	{{ Asset::scripts() }}

	@yield('postscript')

</body>

</html>