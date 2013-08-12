@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Conceptos</span></h3> <hr />

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="row-fluid">

					<div class="control-group">

						<div class="span6">

							@if(!empty($message))
								<div class="alert alert-success">{{ $message }}</div>
							@endif

							<label class="control-label-right" for="inputCodigo"><strong>Código</strong></label>
							<div class="controls">

								<input type="text" id="codigo" name="codigo" placeholder="Código">

							</div>

							<label class="control-label-right" for="inputDescripcion"><strong>Descripción</strong></label>
							<div class="controls">

								<input type="text" id="descripcion" name="descripcion" placeholder="Descripción">

							</div>

						</div>

						<div class="span6">

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

					<div align="center">
						<div class="large-button">
							<button type="submit" class="btn btn-block btn-success">Agregar</button>
						</div>
					</div>

				</div>

				<hr>

				<h4>Lista de Conceptos</h4>

				<div class="row-fluid"> 

					<div class="well">

						<table class="table table-hover">

						  <thead>
							<tr>
							  <th>#</th>
							  <th>Código</th>
							  <th>Descripción</th>
							  <th>Monto</th>
							  <th>Acciones</th>
							</tr>
						  </thead>

						  <tbody>
						  	@foreach($conceptos as $cnp)
								<tr>
								<?php $x++ ?>
								  <td>{{ $x; }}</td>
								  <td>{{ $cnp->codigo }}</td>
								  <td>{{ $cnp->nombre }}</td>
								  <td>Bs. {{ $cnp->monto }},00</td>
								  <td>
								  		<a href="#myModal" role="button" class="tip" data-toggle="tooltip" data-placement="right" title="Modificar"><i class="icon-edit"></i></a>  
								  		<a href="#myModal" role="button" class="tip" data-toggle="tooltip" data-placement="right" title="Eliminar"><i class="icon-remove"></i></a>
								  </td>
								</tr>
							@endforeach
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

@section('postscript')

<script type="text/javascript">

	$(function() {
		$(".tip").tooltip();
	});

</script>

@endsection