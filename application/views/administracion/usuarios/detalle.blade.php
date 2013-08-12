@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Usuarios</span> - Detalle</h3> <hr />

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputParcela"><strong>Parcela</strong></label>
							<div class="controls">

								<input type="text" id="inputParcela" placeholder="Parcela" value="36">

							</div>

							<label class="control-label-right" for="inputCedula"><strong>Cédula</strong></label>
							<div class="controls">

								<input type="text" id="inputCedula" placeholder="Cédula" value="9126116">

							</div>

							<label class="control-label-right" for="inputNombres"><strong>Nombre(s)</strong></label>
							<div class="controls">

								<input type="text" id="inputNombres" placeholder="Nombre(s) y apellido(s)" value="JULIA DUQUE">

							</div>

							<label class="control-label-right" for="inputTelefono"><strong>Teléfono</strong></label>
							<div class="controls">

								<input type="text" id="inputTelefono" placeholder="Teléfono" value="04147043338">

							</div>

							<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
							<div class="controls">

								<input type="text" id="inputEmail" placeholder="Correo Electrónico" value="jaduca43@hotmail.com">

							</div>

						</div>

					</div>

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputUsuario"><strong>Usuario</strong></label>
							<div class="controls">

								<input type="text" id="inputUsuario" value="jaduca" readonly>

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Grupo</strong></label>
							<div class="controls">

								<select>
									<option>Propietario principal</option>
									<option>Propietario</option>
									<option>No propietario</option>
								</select>

							</div>

							<label class="control-label-right" for="inputFecha"><strong>Fecha de registro</strong></label>
							<div class="controls">

								<input type="text" id="inputFecha" placeholder="dd/mm/aaaa" value="19/06/2012">

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