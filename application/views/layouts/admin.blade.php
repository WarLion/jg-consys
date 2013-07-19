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

					<a class="brand" href="{{ URL::to('condominio'); }}" name="top">JG-Consys</a>

					<div class="nav-collapse in collapse" style="height: auto;">

						<ul class="nav">

							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ HTML::image('img/admin.png') }} Administración <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>{{ HTML::link('admin/ctasxcobrar','Cuentas por Cobrar') }}</li>
									<li>{{ HTML::link('admin/ctasxpagar','Cuentas por Pagar') }}</li>
									<li>{{ HTML::link('admin/recibos','Recibos') }}</li>
									<li>{{ HTML::link('admin/conceptos','Conceptos') }}</li>
									<li>{{ HTML::link('admin/reportes','Reportes') }}</li>
									<li>{{ HTML::link('admin/estadisticas','Estadísticas') }}</li>
								</ul>
							</li>

							<li class="divider-vertical"></li>
							<li><a href="{{ URL::to('admin/parcelas'); }}"><i class="icon-home"></i> Parcelas</a></li>

							<li class="divider-vertical"></li>
							<li><a href="{{ URL::to('admin/propietarios'); }}">{{ HTML::image('img/propietarios.png') }} Propietarios</a></li>

							<li class="divider-vertical"></li>
							<li><a href="{{ URL::to('admin/usuarios'); }}"><i class="icon-user"></i> Usuarios</a></li>

							<li class="divider-vertical"></li>
							<li><a href="{{ URL::to('admin/personal'); }}"><i class="icon-briefcase"></i> Personal</a></li>

							<li class="divider-vertical"></li>
							<li><a href="{{ URL::to('admin/proveedores'); }}">{{ HTML::image('img/proveedores.png') }} Proveedores</a></li>

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
								&copy; 2013 <strong>JG-Consys
								<br />Todos los derechos reservados.
							</div>

							<div class="span7" data-original-title="" title="">
								<div class="text-right">Sistema Desarrollado por: <strong>{{ HTML::mailto('juliet.garcia@outlook.com','Juliet Garcia' ) }}</strong></div>
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