@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Cuentas por Pagar</span> - Agregar</h3> <hr />

			<ul class="nav nav-pills">
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar/agregar'); }}"><i class="icon-plus-sign"></i> Agregar</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar'); }}"><i class="icon-eye-open"></i> Ver</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar/pagos'); }}"><i class="icon-ok-sign"></i> Pagos</a></li>
			</ul>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/ctasxpagar/agregar') }}" method="post" class="form-modules">

				@if(!empty($message))
						<div class="alert alert-success">{{ $message }}</div>
				@endif

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

						<h4>Datos</h4>

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

						<div>&nbsp;</div><div>&nbsp;</div>

						<div class="control-group">
							<label class="control-label-right" for="inputReferencia"><strong>Referencia</strong></label>
							<div class="controls">
								<input type="text" id="referencia" name="referencia" placeholder="Nro. de referencia">
							</div>
						</div>

						<div class="control-group">

							<label class="control-label-right" for="inputParcela"><strong>Concepto</strong></label>
							<div class="controls">
								<input type="text" id="referencia" name="concepto" placeholder="Razón de la deuda">
							</div>

						</div>

						<div class="control-group">
							<label class="control-label-right" for="inputMonto"><strong>Monto Bs.</strong></label>
							<div class="controls">
								<input type="text" id="monto" name="monto" class="input-small" placeholder="Ej. 160">
							</div>
						</div>

					</div>

				</div>

				<div align="center">
					<div class="large-button">
						<input type="submit" class="btn btn-block btn-success" name="agregar" value="Registrar">						
					</div>
				</div>

				<div>&nbsp;</div>

				<h4 align="center">Deudas</h4>

			    <table class="table table-hover">

			      <thead>
			        <tr class="well">
			        	<th>#</th>
				        <th>Referencia</th>
				        <th>Concepto</th>
				        <!--<th>Tipo</th>-->
				        <th>Monto</th>
				        <th>Acciones</th>
			        </tr>
			      </thead>

			      <tbody>
			        @if(!empty($ctasxpagar))
			        	@foreach($ctasxpagar as $cxp)
			        	<tr>
							<td>{{ $x++ }}</td>
							<td>{{ $cxp->nro }}</td>
							<td>{{ $cxp->concepto_codigo }}</td>
							<td>Bs. {{ $cxp->monto }}</td>
							<td><a href="#myModal" role="button" data-toggle="modal" class="tip" data-toggle="tooltip" data-placement="right" title="Eliminar"><i class="icon-remove"></i></a></td>
						</tr>
						@endforeach
						<tr>
							<td colspan="3"><div align="center"><strong>Total a pagar</strong></div></td>
							@foreach($total as $tot)
								<td>Bs. {{ $tot->monto.',00' }}</td>
							@endforeach
							<td></td>
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
							<td colspan="3"><div align="center"><strong>Total a pagar</strong></div></td>
							<td>---</td>
							<td></td>
						</tr>
					@endif			        
			      </tbody>

			    </table>		

				<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    
				    <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				        <h3 id="myModalLabel">Confirmar eliminar</h3>
				    </div>
				    
				    <div class="modal-body">
				        <p class="error-text">¿Desea eliminar esta deuda?</p>
				    </div>
				    
				    <div class="modal-footer">
				        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
				        <button class="btn btn-danger" data-dismiss="modal">Eliminar</button>
				    </div>
				    
				</div>

			</form>

		</div>

	</div>

</div>

@endsection

@section('postscript')

<script type="text/javascript">

	$(function() {
		$(".tip").tooltip();
	});

</script>

@endsection