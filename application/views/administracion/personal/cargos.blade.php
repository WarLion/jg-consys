@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/personal/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/personal'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/personal/cargos'); }}" class="btn"><i class="icon-briefcase"></i> Cargos</a>
				
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="control-group">

					<label class="control-label" for="inputCargo"><strong>Cargo</strong></label>
					<div class="controls">

						<input type="text" id="cargo" name="cargo" placeholder="Cargo">
						<button type="submit" class="btn btn-primary">Agregar</button>

					</div>

				</div>

				<hr>

				<strong>Lista de cargos</strong>

				<hr class="bs-docs-separator">

				<div class="row-fluid"> 

					<div class="span6">

						<div class="well">

							<table class="table table-hover">

							  <thead>
								<tr>
								  <th>#</th>
								  <th>Descripción</th>
								  <th>Opciones</th>
								</tr>
							  </thead>

							  <tbody>
								<tr>
								  <td>1</td>
								  <td>Secretaria</td>
								  <td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-edit"></i></a>  <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
								</tr>                   
							  </tbody>

							</table>

						</div>

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