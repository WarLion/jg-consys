@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Personal</span> - Cargos</h3> <hr />

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/personal/cargos') }}" method="post" class="form-modules">

				<div class="control-group">

					<label class="control-label" for="inputCargo"><strong>Nombre del Cargo</strong></label>
					<div class="controls">

						<input type="text" id="cargo" name="cargo" placeholder="Cargo">
						<button type="submit" class="btn btn-success">Agregar</button>

					</div>

				</div>

				<hr>

				<strong>Lista de cargos</strong>

				<hr class="bs-docs-separator">

				<div class="row-fluid"> 

					<div class="span6">

							<table class="table table-hover">

							  <thead>
								<tr class="well">
								  <th>#</th>
								  <th>Descripción</th>
								  <th>Acciones</th>
								</tr>
							  </thead>

							  <tbody>
							      	@if(!empty($cargos))
							        	@foreach($cargos as $crg)
								        	<tr>
												<td>{{ $x++; }}</td>
												<td>{{ $crg->descripcion }}</td>
												<td>{{ HTML::link('admin/personal/detalle','Eliminar') }}</td>
											</tr>
										@endforeach
									@else
							        	<tr>
											<td>---</td>
											<td>---</td>
											<td>---</td>
										</tr>
									@endif                 
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