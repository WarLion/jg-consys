@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
			    <a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>-->
			    <a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

				<thead>
					<tr>
					  <th>#</th>
					  <th>Parcela</th>
					  <th>Correlativo</th>
					  <th>Monto</th>
					  <th>Tipo</th>
					  <th>Estado</th>
					  <th>Fecha</th>
					  <th>Opciones</th>
					</tr>
				</thead>

				<tbody>
					<tr>
					@if(!empty($recibos))
		        		@foreach($recibos as $rcb)
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $rcb->id }}</td>
							<td>{{ $rcb->parcela_nro }}</td>
							<td>{{ $rcb->monto }}</td>
							<td>{{ $rcb->descripcion }}</td>
							<td>{{ $rcb->fecha }}</td>
							<td><i class="icon-check"></i></td>
							<td><a href="#">Detalle</a></td>
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
						</tr>
					@endif			        
				</tbody>

		    </table>

		</div>

	</div>

</div>


@endsection