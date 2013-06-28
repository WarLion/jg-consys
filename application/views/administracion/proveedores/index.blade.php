@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/proveedores/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/proveedores'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<hr>

			<div>&nbsp;</div>

		    <table class="table table-hover">

				<thead>
					<tr>
					  <th>#</th>
					  <th>RIF</th>
					  <th>Nombre(s)</th>
					  <th>Teléfono</th>
					  <th>Correo Electrónico</th>
					  <th>Fecha</th>
					  <th>Opciones</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>20449123-98</td>
						<td>Hidrocentro</td>
						<td>04243809523</td>
						<td>juliet.garcia@outlook.com</td>
						<td>13/05/2012</td>
						<td>{{ HTML::link('admin/proveedores/detalle','Detalle') }}</td>
					</tr>	        
				</tbody>

		    </table>

		</div>

	</div>

</div>


@endsection