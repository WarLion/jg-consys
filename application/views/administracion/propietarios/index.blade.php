@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/propietarios/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/propietarios'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Cédula</th>
		          <th>Nombre(s) y Apellido(s)</th>
		          <th>Tlf. Casa</th>
		          <th>Tlf. Celular</th>
		          <th>Correo Electrónico</th>
		          <th>Parcela</th>
		          <th>Opciones</th>
		        </tr>
		      </thead>

		      <tbody>
		        <tr>
		          <td>1</td>
		          <td>9126116</td>
		          <td>JULIA DUQUE</td>
		          <td>02432694811</td>
		          <td>04147043338</td>
		          <td>jaduca43@hotmail.com</td>
		          <td>36</td>
		          <td>{{ HTML::link('admin/propietarios/detalle','Detalle') }}</td>
		        </tr>			        
		      </tbody>

		    </table>

		</div>

	</div>

</div>


@endsection