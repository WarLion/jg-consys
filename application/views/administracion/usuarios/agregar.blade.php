@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/usuarios/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/usuarios'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputParcela"><strong>Parcela</strong></label>
							<div class="controls">

								<input type="text" id="inputParcela" placeholder="Parcela">

							</div>

							<label class="control-label-right" for="inputCedula"><strong>Cédula</strong></label>
							<div class="controls">

								<input type="text" id="inputCedula" placeholder="Cédula">
								<button type="submit" class="btn btn-primary">Buscar</button>

							</div>

							<label class="control-label-right" for="inputNombres"><strong>Nombre(s)</strong></label>
							<div class="controls">

								<input type="text" id="inputNombres" placeholder="Nombre(s) y apellido(s)">

							</div>

							<label class="control-label-right" for="inputTelefono"><strong>Teléfono</strong></label>
							<div class="controls">

								<input type="text" id="inputTelefono" placeholder="Teléfono">

							</div>

						</div>

					</div>

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
							<div class="controls">

								<input type="text" id="inputEmail" placeholder="Correo Electrónico">

							</div>

							<label class="control-label-right" for="inputUsuario"><strong>Usuario</strong></label>
							<div class="controls">

								<input type="text" id="inputUsuario" value="jaduca">

							</div>

							<label class="control-label-right" for="inputPassword"><strong>Contraseña</strong></label>
							<div class="controls">

								<input type="text" id="inputassword" placeholder="Contraseña">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Grupo</strong></label>
							<div class="controls">

								<select>
									<option>Propietario principal</option>
									<option>Propietario</option>
									<option>No propietario</option>
								</select>

							</div>

						</div>

					</div>

				</div>

				<a href="{{ URL::to('#'); }}" class="btn btn-primary">Agregar</a>

			</form>

		</div>

	</div>

</div>


@endsection