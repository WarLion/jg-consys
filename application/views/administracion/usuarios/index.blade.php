@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><snap style="color:#51a351; font-size:23px;">Usuarios</snap></p> <hr />

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/usuarios/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/usuarios'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Usuario</th>
		          <th>Parcela</th>
		          <th>Cédula</th>
		          <th>Nombre(s)</th>
		          <th>Grupo</th>
		          <th>Fecha</th>
		          <th>Estado</th>
		          <th>Opciones</th>
		        </tr>
		      </thead>

		      <tbody>
		      	@if(!empty($us_propietarios))
		        	@foreach($us_propietarios as $user)
		        		@if($user->activo == 1) 
		        			<?php $estado = "Activo"; ?>
	        			@else
	        				<?php $estado = "Inactivo"; ?>
		        		@endif
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $user->nick }}</td>
							<td>{{ $user->parcela_nro }}</td>
							<td>{{ $user->ci }}</td>
							<td>{{ $user->nombre }}</td>
							<td>{{ $user->descripcion }}</td>
							<td>{{ $user->fecha_reg }}</td>
							<td>{{ $estado }}</td>
							<td>{{ HTML::link('admin/usuarios/detalle','Detalle') }}</td>
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

		      	@if(!empty($us_anonimo))
		        	@foreach($us_anonimo as $user)
		        		@if($user->activo == 1) 
		        			<?php $estado = "Activo"; ?>
	        			@else
	        				<?php $estado = "Inactivo"; ?>
		        		@endif
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $user->nick }}</td>
							<td>{{ $user->parcela_nro }}</td>
							<td>{{ $user->ci }}</td>
							<td>{{ $user->nombre }}</td>
							<td>{{ $user->descripcion }}</td>
							<td>{{ $user->fecha_reg }}</td>
							<td>{{ $estado }}</td>
							<td>{{ HTML::link('admin/usuarios/detalle','Detalle') }}</td>
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