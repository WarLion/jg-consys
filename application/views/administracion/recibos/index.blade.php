@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><snap style="color:#51a351; font-size:23px;">Recibos</snap></p> <hr />

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
			    <a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>-->
			    <!--<a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>-->
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

				<thead>
					<tr>
					  <th>Correlativo</th>
					  <th>Parcela</th>
					  <th>Monto</th>
					  <th>Tipo</th>
					  <th>Fecha</th>
					  <th>Estado</th>
					  <th>Opciones</th>
					</tr>
				</thead>

				<tbody>
					<tr>
					@if(!empty($recibos))
		        		@foreach($recibos as $rcb)
			        	<tr>
							<td>{{ '00'.$rcb->id }}</td>
							<td>{{ $rcb->parcela_nro }}</td>
							<td>{{ $rcb->monto }}</td>
							<td>{{ $rcb->descripcion }}</td>
							<td>{{ $rcb->fecha }}</td>
							<td><i class="icon-check"></i></td>
							<td>{{ HTML::link('admin/recibos/detalle?id='.$rcb->id,'Detalle') }}</td>
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