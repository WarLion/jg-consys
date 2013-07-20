@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						<div class="well"> 

							<div class="control-group">

								<label class="control-label-right" for="inputCodigo"><strong>Código</strong></label>
								<div class="controls">

									<input type="text" id="codigo" name="codigo" placeholder="Código">

								</div>

								<label class="control-label-right" for="inputDescripcion"><strong>Descripción</strong></label>
								<div class="controls">

									<input type="text" id="descripcion" name="descripcion" placeholder="Descripción">

								</div>

								<label class="control-label-right" for="inputMonto"><strong>Monto</strong></label>
								<div class="controls">

									<input type="text" id="monto" name="monto" placeholder="Monto">

								</div>

								<label class="control-label-right" for="inputCodigo"><strong>Tipo</strong></label>
								<div class="controls">

									<select>

										<option>Ingreso</option>
										<option>Egreso</option>

									</select>

								</div>

							</div>

						</div>

						<button type="submit" class="btn btn-success">Agregar</button>

					</div>

				</div>

				<hr>

				<strong>Lista de Conceptos</strong>

				<hr class="bs-docs-separator">

				<div class="row-fluid"> 

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
							  <td>0001</td>
							  <td>ENERO 2009</td>
							  <td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-edit"></i></a>  <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
							</tr>                   
						  </tbody>

						</table>

					</div>
					
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