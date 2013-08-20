@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Usuarios</span></h3> <hr />

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr class="well">
		          <th>#</th>
		          <th>Usuario</th>
		          <th>Parcela</th>
		          <th>Cédula</th>
		          <th>Nombre(s)</th>
		          <th>Grupo</th>
		          <th>Fecha</th>
		          <th>Estado</th>
		          <th>Acciones</th>
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
				
		      </tbody>

		    </table>

		</div>

	</div>

</div>


@endsection