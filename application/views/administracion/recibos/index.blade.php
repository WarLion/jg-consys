@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
			    <a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>
			    <a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

				<thead>
					<tr>
					  <th>#</th>
					  <th>Correlativo</th>
					  <th>Parcela</th>
					  <th>Monto</th>
					  <th>Tipo</th>
					  <th>Estado</th>
					  <th>Fecha</th>
					  <th>Opciones</th>
					</tr>
				</thead>

				<tbody>
					<tr>
					  <td>1</td>
					  <td>1234</td>
					  <td>36</td>
					  <td>360,00</td>
					  <td>Cheque</td>
					  <td><i class="icon-check"></i></td>
					  <td>20/06/2013</td>
					  <td>{{ HTML::link('admin/recibos/detalle','Detalle') }}</td>
					</tr>			        
				</tbody>

		    </table>

		</div>

	</div>

</div>


@endsection