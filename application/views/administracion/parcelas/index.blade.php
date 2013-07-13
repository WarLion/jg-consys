@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/parcelas/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/parcelas'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/parcelas/calles'); }}" class="btn"><i class="icon-road"></i> Calles</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Parcela</th>
		          <th>Calle</th>
		          <th>Alicuota</th>
		          <th>Metros</th>
		          <th>Condición</th>
		          <th>Opciones</th>
		        </tr>
		      </thead>

		      <tbody>
		        @if(!empty($parcelas))
		        	@foreach($parcelas as $prc)
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $prc->nro }}</td>
							<td>{{ $prc->calle }}</td>
							<td>{{ $prc->alicuota }}</td>
							<td>{{ $prc->mts }}</td>
							<td>{{ $prc->habitada }}</td>
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
					</tr>
				@endif
		      </tbody>

		    </table>

		</div>

	</div>

</div>


@endsection