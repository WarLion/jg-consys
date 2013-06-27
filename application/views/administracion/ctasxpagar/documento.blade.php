@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxpagar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxpagar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/ctasxpagar/documento'); }}" class="btn"><i class="icon-file"></i> Tipos de Documento</a>
			    <a href="{{ URL::to('admin/ctasxpagar/pagos'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Pagos</a>
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="control-group">

					<label class="control-label" for="inputProveedor"><strong>Tipos de documento</strong></label>
					<div class="controls">

						<input type="text" id="proveedor" name="proveedor" placeholder="Proveedor"><br>
						<button type="submit" class="btn btn-primary">Agregar</button>

					</div>

				</div>

				<hr class="bs-docs-separator">

			<div class="row-fluid">

				<div class="span6">

					<p><strong>Documento</strong></p> 

					<hr class="bs-docs-separator">

					<div class="well">

					

						<div class="control-group">

							<label class="control-label-right" for="inputParcela"><strong>Tipo</strong></label>
							<div class="controls">

								<select>

									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>

								</select>

							</div>

						</div>

						<div class="control-group">
							<label class="control-label-right" for="inputMonto"><strong>Monto</strong></label>
							<div class="controls">
								<input type="text" id="monto" name="monto" class="input-small" readonly>
							</div>
						</div>

				</div>

				</div>

			</div>

			<a href="{{ URL::to('#'); }}" class="btn btn-primary">Agregar</a>

			<div>&nbsp;</div>

			<strong>Tipos de documento</strong>

			<hr class="bs-docs-separator">			

			<div class="well">

			    <table class="table table-hover">

			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Descripción</th>
			          <th>Opciones</th>
			          <th style="width: 36px;"></th>
			        </tr>
			      </thead>

			      <tbody>
			        <tr>
			          <td>1</td>
			          <td>Factura</td>
			          <td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-edit"></i></a>  <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
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

			</form>

		</div>

	</div>

</div>


@endsection