@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/parcelas/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/parcelas'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/parcelas/calles'); }}" class="btn"><i class="icon-road"></i> Calles</a>
			    
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/parcelas/calles') }}" method="post" class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						{{ $message }}

						<div class="well"> 

							<div class="control-group">

								<label class="control-label-right" for="inputCalle"><strong>Nombre</strong></label>
								<div class="controls">

									<input type="text" id="calle" name="calle" placeholder="Nombre de la calle">

								</div>

								<label class="control-label-right" for="inputMtsLargo"><strong>Mts - largo</strong></label>
								<div class="controls">

									<input type="text" id="mtslargo" name="mtslargo" placeholder="Mts - largo">

								</div>

								<label class="control-label-right" for="inputMtsAncho"><strong>Mts - ancho</strong></label>
								<div class="controls">

									<input type="text" id="mtsancho" name="mtsancho" placeholder="Mts - ancho">

								</div>

							</div>

						</div>

						<button type="submit" class="btn btn-success">Agregar</button>

						<div>&nbsp;</div>

					</div>

				</div>

				<div class="row-fluid">

					<strong>Calles</strong>

					<hr class="bs-docs-separator">

					<div class="row-fluid">

						<div class="well">

							<table class="table table-hover">

							  <thead>
								<tr>
								  <th>#</th>
								  <th>Nombre</th>
								  <th>Mts - largo</th>
								  <th>Mts - ancho</th>
								  <th>Opciones</th>
								</tr>
							  </thead>

								<tbody>
									@if(!empty($calles))
							        	@foreach($calles as $cal)
								        	<tr>
												<td>{{ $x++; }}</td>
												<td>{{ $cal->nombre }}</td>
												<td>{{ $cal->mtslargo }}</td>
												<td>{{ $cal->mtsancho }}</td>
												<td>{{ HTML::link('admin/usuarios/detalle','Detalle') }}</td>
											</tr>
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

			</form>

		</div>

	</div>

</div>


@endsection