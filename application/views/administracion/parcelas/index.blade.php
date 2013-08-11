@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Parcelas</span></h3> <hr />

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr class="well">
		          <th>#</th>
		          <th>Parcela</th>
		          <th>Calle</th>
		          <th>Alicuota</th>
		          <th>Metros</th>
		          <th>Condición</th>
		          <th>Ver</th>
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