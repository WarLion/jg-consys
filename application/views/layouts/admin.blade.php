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

<div id="wrap">

	<div id="main">

		<div class="navbar navbar-static-top" style="margin-bottom: 10px">

			<div class="navbar-inner">

				<div class="container-fluid">

					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<a class="brand logo-consys" href="{{ URL::to('admin'); }}" style="padding: 7px 20px 5px 30px;" name="top">
						{{ HTML::image('img/consys/logo_consys-w.png') }}
					</a>

					<div class="nav-collapse in collapse">

						<ul class="nav">

							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ HTML::image('img/consys/admin-w.png') }} Administración <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>{{ HTML::link('admin/ctasxcobrar','Cuentas por Cobrar') }}</li>
									<li>{{ HTML::link('admin/ctasxpagar','Cuentas por Pagar') }}</li>
									<li>{{ HTML::link('admin/recibos','Recibos') }}</li>
									<li>{{ HTML::link('admin/conceptos','Conceptos') }}</li>
									<!--<li>{{ HTML::link('admin/reportes','Reportes') }}</li>
									<li>{{ HTML::link('admin/estadisticas','Estadísticas') }}</li>-->
								</ul>
							</li>

							<li class="dropdown"><a href="{{ URL::to('admin/parcelas'); }}" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-home icon-white"></i> Parcelas <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="{{ URL::to('admin/parcelas'); }}"><i class="icon-eye-open"></i>&nbsp; Ver - Editar</a></li>
									<li><a href="{{ URL::to('admin/parcelas/agregar'); }}"><i class="icon-plus-sign"></i>&nbsp; Agregar</a></li>
									<li class="divider"></li>
									<li><a href="{{ URL::to('admin/parcelas/calles'); }}"><i class="icon-road"></i>&nbsp; Calles</a></li>
								</ul>
							</li>

							<li class="dropdown"><a href="{{ URL::to('admin/propietarios'); }}" class="dropdown-toggle" data-toggle="dropdown">{{ HTML::image('img/consys/propietarios-w.png') }} Propietarios <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="{{ URL::to('admin/propietarios'); }}"><i class="icon-eye-open"></i>&nbsp; Ver - Editar</a></li>
									<li><a href="{{ URL::to('admin/propietarios/agregar'); }}"><i class="icon-plus-sign"></i>&nbsp; Agregar</a></li>
								</ul>
							</li>

							<li class="dropdown"><a href="{{ URL::to('admin/usuarios'); }}" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Usuarios <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="{{ URL::to('admin/usuarios'); }}"><i class="icon-eye-open"></i>&nbsp; Ver - Editar</a></li>
									<li><a href="{{ URL::to('admin/usuarios/agregar'); }}"><i class="icon-plus-sign"></i>&nbsp; Agregar</a></li>
								</ul>
							</li>

							<li class="dropdown"><a href="{{ URL::to('admin/personal'); }}" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-briefcase icon-white"></i> Personal <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="{{ URL::to('admin/personal'); }}"><i class="icon-eye-open"></i>&nbsp; Ver - Editar</a></li>
									<li><a href="{{ URL::to('admin/personal/agregar'); }}"><i class="icon-plus-sign"></i>&nbsp; Agregar</a></li>
									<li class="divider"></li>
									<li><a href="{{ URL::to('admin/personal/cargos'); }}"><i class="icon-briefcase"></i>&nbsp; Cargos</a></li>
								</ul>
							</li>

							<li class="dropdown"><a href="{{ URL::to('admin/proveedores'); }}" class="dropdown-toggle" data-toggle="dropdown">{{ HTML::image('img/consys/proveedores-w.png') }} Proveedores <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="{{ URL::to('admin/proveedores'); }}"><i class="icon-eye-open"></i>&nbsp; Ver - Editar</a></li>
									<li><a href="{{ URL::to('admin/proveedores/agregar'); }}"><i class="icon-plus-sign"></i>&nbsp; Agregar</a></li>
								</ul>
							</li>

						</ul>

						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Bienvenido(a), Administrador <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-edit"></i> Editar Perfil</a></li>
									<li class="divider"></li>
									<li><a href="{{ URL::to('admin/login') }}"><i class="icon-off"></i> Cerrar Sesión</a></li>
								</ul>
							</li>
						</ul>

					</div>

				</div>

			</div>

		</div>
	
		@yield('content')

	</div>

</div>

<div id="footer">

	<div class="container">

		<div class="row-fluid">
	
			<p>
				&copy; 2013 <strong>JG-Consys</strong> - Sistema Administrativo de Condominios
			</p>

			<p>
				Sistema desarrollado por: <a href="mailto:juliet.garcia@outlook.com"><strong>Juliet Garcia</strong></a> - Todos los derechos reservados.
			</p>

		</div>

	</div>

</div> 

	{{ Asset::scripts() }}

	@yield('postscript')

</body>

</html>