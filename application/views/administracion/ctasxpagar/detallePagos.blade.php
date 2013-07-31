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

					<p><strong>Datos</strong></p> 

					<hr class="bs-docs-separator">

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

			<strong>Detalle</strong>

			<hr class="bs-docs-separator">			

			<div class="well">

			    <table class="table table-hover">

					<thead>
						<tr>
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
							<td>{{ $det->ctasxpagar_monto }}</td>
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

			</div>

			</form>

			<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 id="myModalLabel">Delete Confirmation</h3>
			    </div>
			    
			    <div class="modal-body">
			        <p class="error-text">Are you sure you want to delete the user?</p>
			    </div>
			    
			    <div class="modal-footer">
			        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
			    </div>
			    
			</div>

		</div>

	</div>

</div>

@endsection