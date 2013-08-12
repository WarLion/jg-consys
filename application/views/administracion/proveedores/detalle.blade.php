@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Proveedores</span> - Detalle</h3> <hr />

			<form class="form-modules">

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

					<div align="center">
						<div class="large-button">
							<div class="btn-group"><a href="{{ URL::to('#'); }}" class="btn btn-success">Actualizar <i class="icon-refresh icon-white"></i></a></div>
							<div class="btn-group"><a href="{{ URL::to('#'); }}" class="btn btn-danger">Desactivar <i class="icon-remove icon-white"></i></a></div>
						</div>
					</div>

			</form>

		</div>

	</div>

</div>


@endsection