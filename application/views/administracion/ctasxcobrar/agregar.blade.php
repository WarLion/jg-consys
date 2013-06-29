@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxcobrar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxcobrar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('administracion/ctasxcobrar/agregar') }}" method="post" class="form-modules">

				<div class="control-group">

					<label class="control-label" for="inputParcela"><strong>Parcela</strong></label>
					<div class="controls">

						<input type="text" id="parcela" name="parcela" placeholder="Parcela">
						<button type="submit" class="btn btn-primary">Buscar</button>
						<button type="submit" class="btn btn-primary">Todos</button>

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
						          <th>Parcela</th>
						          <th>Propietario</th>
						          <th style="width: 36px;"></th>
						        </tr>
						      </thead>

						      <tbody>
						        <tr>
						          <td>36</td>
						          <td>JULIA DUQUE</td>
						        </tr>			        
						      </tbody>

						    </table>

					    </div>

					</div>

					<div class="span6">

						<p><strong>Concepto</strong></p> 

						<hr class="bs-docs-separator">

						<div class="well">

							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Código</strong></label>
								<div class="controls">

									<select class="select-large" id="SelectConceptos">

									@foreach($conceptos as $concepto)

										<option value="{{ $concepto->monto }}">{{ $concepto->nombre }}</option>

									@endforeach

									</select>

								</div>

							</div>

						<div class="control-group">
							<label class="control-label-right" for="inputMonto"><strong>Monto</strong></label>
							<div class="controls">
								<input type="text" class="input-small" id="MontoSelected" readonly>
							</div>
						</div>

					</div>

					</div>

				</div>

				<input type="submit" class="btn btn-primary" value="Agregar">

			</form>

			<strong>Deudas</strong>

			<hr class="bs-docs-separator">			

			<div class="well">

			    <table class="table table-hover">

			      <thead>
			        <tr>
			          <th>Código</th>
			          <th>Concepto</th>
			          <th>Monto</th>
			          <th>Opciones</th>
			          <th style="width: 36px;"></th>
			        </tr>
			      </thead>

			      <tbody>
			        <tr>
			          <td>0001</td>
			          <td>CONDOMINIO ENERO 2012</td>
			          <td>360,00</td>
			          <td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
			        </tr>			        
			      </tbody>

			      <tbody>
			        <tr>
			        	<td></td>
						<td><strong>Total</strong></td>
						<td colspan="2">360,00</td>
			        </tr>			        
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

		</div>

	</div>

</div>

@endsection

@section('postscript')

<script type="text/javascript">
	
	// Muestra el valor del monto del concepto seleccionado
	$('#SelectConceptos').change(function(){
	    var selectedOption = $(this).find('option:selected');
	    var selectedValue = $(selectedOption).val();
	    $("#MontoSelected").val(selectedValue + ',00');
	}).change();

</script>

@endsection