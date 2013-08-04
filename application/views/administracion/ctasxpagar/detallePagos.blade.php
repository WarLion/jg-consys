@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><span style="font-size:23px;">Detalle de Pagos -</span> <snap style="color:#51a351; font-size:23px;">Cuentas por Pagar</snap></p> <hr />

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxpagar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxpagar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/ctasxpagar/documento'); }}" class="btn"><i class="icon-file"></i> Tipos de Documento</a>-->
			    <a href="{{ URL::to('admin/ctasxpagar/pagos'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Pagos</a>
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						<h4>Datos</h4>

						<div class="well">

							<table class="table table-hover">

						      <thead>
						        <tr>
						          <th>RIF</th>
						          <th>Proveedor</th>
						          <th>Referencia</th>
						          <th>Tipo</th>
						          <th>Fecha</th>
						        </tr>
						      </thead>

						      <tbody>
						    	@if(!empty($detalle))
				        			@foreach($detalle as $det)
							        <tr>
										<td>{{ $det->rif }}</td>
										<td>{{ $det->proveedor }}</td>
										<td>{{ $det->ref_pago }}</td>
										<td>{{ $det->metodo }}</td>
										<td>{{ $det->fec_pago }}</td>
							        </tr>
							        <?php break; ?>
							        @endforeach
								@else
									<tr>
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

				<h4 align="center">Detalle</h4>

			    <table class="table table-hover">

					<thead>
						<tr class="well">
							<th>Referencia</th>
							<th>Concepto</th>
							<th>Fecha</th>
							<th>Monto</th>
						</tr>
					</thead>

					<tbody>
					@if(!empty($detalle))
			        	@foreach($detalle as $det)
						<tr>
							<td>{{ $det->ref_documento }}</td>
							<td>{{ $det->concepto_codigo }}</td>
							<td>{{ $det->fec_vencimiento }}</td>
							<td>Bs. {{ $det->ctasxpagar_monto }}</td>
						</tr>
						@endforeach
					@else
						<tr>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
						</tr>
					@endif
					</tbody>

			    </table>

			</form>

		</div>

	</div>

</div>

@endsection