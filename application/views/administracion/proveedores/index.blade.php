@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Proveedores</span></h3> <hr />

			<div>&nbsp;</div>

		    <table class="table table-hover">

				<thead>
					<tr class="well">
					  <th>#</th>
					  <th>RIF</th>
					  <th>Nombre(s)</th>
					  <th>Teléfono</th>
					  <th>Correo Electrónico</th>
					  <th>Fecha</th>
					  <th>Acciones</th>
					</tr>
				</thead>

				<tbody>
			      	@if(!empty($proveedores))
			        	@foreach($proveedores as $prv)
				        	<tr>
								<td>{{ $x++; }}</td>
								<td>{{ $prv->nro }}</td>
								<td>{{ $prv->descripcion }}</td>
								<td>{{ $prv->telefono }}</td>
								<td>{{ $prv->email }}</td>
								<td>{{ $prv->fecha_ing }}</td>
								<td>{{ HTML::link('admin/proveedores/detalle','Detalle') }}</td>
							</tr>
						@endforeach
					@else
			        	<tr>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
						</tr>
					@endif
				</tbody>

		    </table>

		</div>

	</div>

</div>


@endsection