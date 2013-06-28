@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/usuarios/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/usuarios'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Parcela</th>
		          <th>Cédula</th>
		          <th>Nombre(s)</th>
		          <th>Usuario</th>
		          <th>Grupo</th>
		          <th>Fecha</th>
		          <th>Estado</th>
		          <th>Opciones</th>
		        </tr>
		      </thead>

		      <tbody>
		        <tr>
		          <td>1</td>
		          <td>36</td>
		          <td>9126116</td>
		          <td>JULIA DUQUE</td>
		          <td>jaduca</td>
		          <td>Propietario Principal</td>
		          <td>13/05/2012</td>
		          <td>Activo</td>
		          <td>{{ HTML::link('admin/usuarios/detalle','Detalle') }}</td>
		        </tr>			        
		      </tbody>

		    </table>

		</div>

	</div>

</div>


@endsection