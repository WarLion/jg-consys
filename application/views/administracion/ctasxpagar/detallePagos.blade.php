@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Cuentas por Pagar</span> - Detalle</h3> <hr />

			<ul class="nav nav-pills">
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar/agregar'); }}"><i class="icon-plus-sign"></i> Agregar</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar'); }}"><i class="icon-eye-open"></i> Ver</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar/pagos'); }}"><i class="icon-ok-sign"></i> Pagos</a></li>
			</ul>

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