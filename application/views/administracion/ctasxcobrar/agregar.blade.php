@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Cuentas por Cobrar</span> - Agregar</h3> <hr />

			<ul class="nav nav-pills">
				<li class="active"><a href="{{ URL::to('admin/ctasxcobrar/agregar'); }}"><i class="icon-plus-sign"></i> Agregar</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxcobrar'); }}"><i class="icon-eye-open"></i> Ver</a></li>
			</ul>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/ctasxcobrar/agregar') }}" method="post" class="form-modules">

			@if(!empty($add))
				<div class="alert alert-success">El concepto de la deuda, se ha registrado correctamente.</div>			
			@endif

			@if(isset($search) && empty($propietario))
				<div class="alert alert-warning">El número de parcela no existe, por favor, verifique la parcela a buscar.</div>
			@endif

				<div class="control-group">

					<label class="control-label" for="inputParcela"><strong>Parcela</strong></label>
					<div class="controls">

						<input type="text" id="parcela" name="parcela" placeholder="Parcela">
						<input type="hidden" id="parcela" name="hidden_parcela" value="{{ $txtParcela }}">

						<button type="submit" class="btn btn-success" name="search">Buscar</button>
						<!--<button type="submit" class="btn btn-success">Todos</button>-->

					</div>

				</div>

				<div class="row-fluid">

					<div class="span6">

						<h4>Datos</h4>

						<div class="well">

							<table class="table table-hover">

						      <thead>
						        <tr>
						          <th>Parcela</th>
						          <th>Cédula</th>
						          <th>Propietario</th>
						        </tr>
						      </thead>

						      <tbody>
						        <tr>
						        	@if($txtParcela != null && $propietario != null)

						        		<td>{{ $txtParcela }}</td>
									
										@foreach($propietario as $ptr)
											<td>
										  		{{ $ptr->ci }}
											</td>
											<td>
										  		{{ $ptr->nombre }}
											</td>
										@endforeach

									@else
										<td>---</td>
										<td>---</td>
										<td>---</td>
									@endif
						        </tr>			        
						      </tbody>

						    </table>

					    </div>

					</div>

					<div class="span6">

						<h4>Concepto</h4>

						<div class="well">

							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Código</strong></label>
								<div class="controls">

									<select class="select-large" id="SelectConceptos" name="valueConcepto">

									@if(!empty($conceptos))
										@foreach($conceptos as $concepto)

											<option value="{{ $concepto->codigo }}" label="{{ $concepto->nombre }}">{{ $concepto->monto }}</option>

										@endforeach
									@else
										<option>---</option>
									@endif
									</select>

								</div>

							</div>

						<div class="control-group">
							<label class="control-label-right" for="inputMonto"><strong>Monto Bs.</strong></label>
							<div class="controls">
								@if(!empty($conceptos))
									<input type="text" class="input-small" name="monto" id="MontoSelected">
								@else
									<input type="text" class="input-small" readonly>
								@endif
							</div>
						</div>

					</div>

					</div>

				</div>

				<div align="center">
					<div class="large-button">
						@if(!empty($conceptos))
							<input type="submit" class="btn btn-block btn-success" name="add" value="Registrar">
						@else
							<input type="submit" class="btn btn-block btn-success" name="add" value="Registrar" disabled>
						@endif
					</div>
				</div>

			</form>

			<h4 class="center">Deudas</h4>

			    <table class="table table-hover">

			      <thead>
			        <tr class="well">
			          <th>Código</th>
			          <th>Concepto</th>
			          <th>Monto</th>
			          <th>Acciones</th>
			        </tr>
			      </thead>

			      <tbody>
			        
			        	@if(!empty($ctasxcobrar))
							@foreach($ctasxcobrar as $cxc)
							<tr>
								<td>
							  		{{ $cxc->concepto_codigo }}
								</td>
								<td>
							  		{{ $cxc->nombre }}
								</td>
								<td>
							  		Bs. {{ $cxc->monto.',00' }}
								</td>
								<td><a href="#myModal" role="button" data-toggle="modal" class="tip" data-toggle="tooltip" data-placement="right" title="Eliminar"><i class="icon-remove"></i></a></td>
							</tr>
							@endforeach
						@else
						<tr>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td><i class="icon-remove"></i></td>
						</tr>
						@endif
			        			        
			      </tbody>

			      <tbody>
			        <tr>
			        	<td></td>
						<td><strong>Total</strong></td>
						<td>
			        	@if(!empty($sum_monto))							
								
					  		Bs. {{ $sum_monto.',00' }}								
						
						@else
						</td>
						<td colspan="2"></td>
						@endif
			        </tr>
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

		</div>

	</div>

</div>

@endsection

@section('postscript')

<script type="text/javascript">
	
	// Muestra el valor del monto del concepto seleccionado
	$('#SelectConceptos').change(function(){
	    var selectedOption = $(this).find('option:selected');
	    var selectedText = $(selectedOption).text();
	    var selectedValue = $(selectedOption).val();
	    $("#MontoSelected").val(selectedText + ',00');
	}).change();

</script>

<script type="text/javascript">

	$(function() {
		$(".tip").tooltip();
	});

</script>

@endsection