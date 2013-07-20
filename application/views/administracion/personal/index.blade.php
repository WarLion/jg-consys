@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><snap style="color:#51a351; font-size:23px;">Personal</snap></p> <hr />

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/personal/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/personal'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/personal/cargos'); }}" class="btn"><i class="icon-briefcase"></i> Cargos</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Cédula</th>
		          <th>Nombre(s)</th>
		          <th>Tlf. Celular</th>
		          <th>Correo Electrónico</th>
		          <th>Cargo</th>
		          <th>Fecha Ingreso</th>
		          <th>Estado</th>
		          <th>Opciones</th>
		        </tr>
		      </thead>

		      <tbody>
		      	@if(!empty($personal))
		        	@foreach($personal as $prp)
		        		@if($prp->activo == 1) 
		        			<?php $estado = "Activo"; ?>
	        			@else
	        				<?php $estado = "Inactivo"; ?>
		        		@endif
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $prp->ci }}</td>
							<td>{{ $prp->nombre }}</td>
							<td>{{ $prp->tlf_cel }}</td>
							<td>{{ $prp->email }}</td>
							<td>{{ $prp->descripcion }}</td>
							<td>{{ $prp->fecha_ing }}</td>
							<td>{{ $estado }}</td>
							<td>{{ HTML::link('admin/personal/detalle','Detalle') }}</td>
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