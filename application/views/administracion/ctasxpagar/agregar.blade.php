@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxpagar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxpagar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/ctasxpagar/documento'); }}" class="btn"><i class="icon-file"></i> Tipos de Documento</a>-->
			    <a href="{{ URL::to('admin/ctasxpagar/pagos'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Pagos</a>
			    
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/ctasxpagar/agregar') }}" method="post" class="form-modules">

				{{ $message }}

				<div class="control-group">

					<label class="control-label" for="inputProveedor"><strong>Proveedor</strong></label>
					<div class="controls">

						<input type="text" id="proveedor" name="proveedor" placeholder="Proveedor">
						<input type="submit" class="btn btn-success" name="buscar" value="Buscar">

					</div>

				</div>

				<hr class="bs-docs-separator">

			<div class="row-fluid">

				<div class="span6">

					<p><strong>Datos</strong></p> 

					<hr class="bs-docs-separator">

					<div class="well">

						<table class="table table-hover">

					      <thead>
					        <tr>
					          <th>ID</th>
					          <th>Proveedor</th>
					          <th style="width: 36px;"></th>
					        </tr>
					      </thead>

					      <tbody>
					      		<tr>
					        @if(!empty($proveedor))
					        	@foreach($proveedor as $prv)
									<td>{{ $prv->nro }} <input type="hidden" name="hidentificacion" value="{{ $prv->nro }}"></td>
									<td>{{ $prv->descripcion }} <input type="hidden" name="hproveedor" value="{{ $prv->descripcion }}"></td>
								@endforeach
							@else
					        	<tr>
									<td>---</td>
									<td>---</td>
								</tr>
							@endif			        
					      </tbody>

					    </table>

				    </div>

				</div>

				<div class="span6">

					<p><strong>Documento</strong></p> 

					<hr class="bs-docs-separator">

					<div class="well">

						<div class="control-group">
							<label class="control-label-right" for="inputReferencia"><strong>Referencia</strong></label>
							<div class="controls">
								<input type="text" id="referencia" name="referencia">
							</div>
						</div>

						<div class="control-group">

							<label class="control-label-right" for="inputParcela"><strong>Concepto</strong></label>
							<div class="controls">
								<input type="text" id="referencia" name="concepto">
							</div>

						</div>

						<!--<div class="control-group">

							<label class="control-label-right" for="inputParcela"><strong>Tipo</strong></label>
							<div class="controls">

								<select name="tipo">
									@if(!empty($tipo))
										@foreach($tipo as $tip)
											<option value="{{ $tip->id }}">{{ $tip->descripcion }}</option>
										@endforeach
									@endif

								</select>

							</div>

						</div>-->

						<div class="control-group">
							<label class="control-label-right" for="inputMonto"><strong>Monto</strong></label>
							<div class="controls">
								<input type="text" id="monto" name="monto" class="input-small">
							</div>
						</div>

					</div>

				</div>

			</div>

			<input type="submit" class="btn btn-success" name="agregar" value="Agregar">

			<div>&nbsp;</div>

			<strong>Deudas</strong>

			<hr class="bs-docs-separator">			

			<div class="well">

			    <table class="table table-hover">

			      <thead>
			        <tr>
			        	<th>#</th>
				        <th>Referencia</th>
				        <th>Concepto</th>
				        <!--<th>Tipo</th>-->
				        <th>Monto</th>
				        <th>Opciones</th>
			        </tr>
			      </thead>

			      <tbody>
			        @if(!empty($ctasxpagar))
			        	@foreach($ctasxpagar as $cxp)
			        	<tr>
							<td>{{ $x++ }}</td>
							<td>{{ $cxp->nro }}</td>
							<td>{{ $cxp->concepto_codigo }}</td>
							<td>{{ $cxp->monto }}</td>
							<td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
						</tr>
						@endforeach
						<tr>
							<td></td>
							<td></td>
							<td><strong>Total</strong></td>
							@foreach($total as $tot)
								<td>{{ $tot->monto.',00' }}</td>
							@endforeach
						</tr>
					@else
			        	<tr>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
						</tr>

						<tr>
							<td></td>
							<td></td>
							<td><strong>Total</strong></td>
							<td>---</td>
							<td></td>
						</tr>
					@endif			        
			      </tbody>

			    </table>

			</div>			

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

			</form>

		</div>

	</div>

</div>


@endsection