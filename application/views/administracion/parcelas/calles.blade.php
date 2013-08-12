@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Parcelas</span> - Calles</h3> <hr />

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/parcelas/calles') }}" method="post" class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						@if(!empty($message))
							<div class="alert alert-success">{{ $message }}</div>
						@endif

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

						
						<button type="submit" class="btn btn-success">   Agregar   </button>
							

						<div>&nbsp;</div>

					</div>

				</div>

				<div class="row-fluid">

					<h4>Calles</h4>

					<div class="row-fluid">

						<table class="table table-hover">

						  <thead>
							<tr class="well">
							  <th>#</th>
							  <th>Nombre</th>
							  <th>Acciones</th>
							</tr>
						  </thead>

							<tbody>
								@if(!empty($calles))
						        	@foreach($calles as $cal)
							        	<tr>
											<td>{{ $x++; }}</td>
											<td>{{ $cal->nombre }}</td>
											<td>{{ HTML::link('','Modificar') }}</td>
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

			</form>

		</div>

	</div>

</div>

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


@endsection