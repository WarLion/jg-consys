@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/proveedores/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/proveedores'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<hr>

			<form class="form-modules">

				<div class="well">

					<div class="row-fluid">

						<div class="span6">

							<div class="control-group">

								<label class="control-label-right" for="inputRif"><strong>RIF</strong></label>
								<div class="controls">

									<input type="text" id="rif" placeholder="rif" value="20449123-98">

								</div>

								<label class="control-label-right" for="inputNombre"><strong>Nombre</strong></label>
								<div class="controls">

									<input type="text" id="nombre" placeholder="Nombre" value="Hidrocentro">

								</div>

								<label class="control-label-right" for="inputTelefono"><strong>Teléfono</strong></label>
								<div class="controls">

									<input type="text" id="telefono" placeholder="Teléfono" value="0243774574">

								</div>

							</div>

						</div>

						<div class="span6">

							<div class="control-group">

								<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
								<div class="controls">

									<input type="text" id="inputEmail" placeholder="Correo Electrónico" value="juliet.garcia@outlook.com">

								</div>

								<label class="control-label-right" for="inputDireccion"><strong>Dirección</strong></label>
								<div class="controls">

									<input type="text" id="Direccion" placeholder="Dirección" value="Maracay">

								</div>

								<label class="control-label-right" for="inputEstado"><strong>Estado</strong></label>
								<div class="controls">

									<input class="input-small" type="text" id="inputEstado" value="Activo" readonly>

								</div>

							</div>

						</div>

					</div>

				</div>			

				<a href="{{ URL::to('#'); }}" class="btn btn-primary">Actualizar <i class="icon-refresh icon-white"></i></a>
				<a href="{{ URL::to('#'); }}" class="btn btn-danger">Desactivar <i class="icon-remove icon-white"></i></a>

			</form>

		</div>

	</div>

</div>


@endsection