@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><snap style="color:#51a351; font-size:23px;">Parcelas</snap></p> <hr />

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