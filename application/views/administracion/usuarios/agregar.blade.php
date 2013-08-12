@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Usuarios</span> - Agregar</h3> <hr />

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/usuarios/agregar') }}" method="post" class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						@if(!empty($message))
							<div class="alert alert-success">{{ $message }}</div>
						@endif					

						<div class="control-group">

							<label class="control-label-right" for="inputParcela"><strong>Parcela</strong></label>
							<div class="controls">

								<input type="text" name="parcela" id="inputParcela" placeholder="Parcela" value="{{ $propietarios['parcela_nro'] }}">

							</div>

							<label class="control-label-right" for="inputCedula"><strong>Cédula</strong></label>
							<div class="controls">

								<input type="text" name="cedula" id="inputCedula" placeholder="Cédula" value="{{ $propietarios['ci'] }}">
								<input type="submit" name="buscar" class="btn btn-success" value="Buscar">

							</div>

							<label class="control-label-right" for="inputNombres"><strong>Nombre(s)</strong></label>
							<div class="controls">

								<input type="text" name="nombre" id="inputNombres" placeholder="Nombre(s) y apellido(s)" value="{{ $propietarios['nombre'] }}">

							</div>

							<label class="control-label-right" for="inputCedula"><strong>Sexo</strong></label>
							<div class="controls">

								<select name="sexo">
									<option value="Femenino">Femenino</option>
									<option value="Masculino">Masculino</option>
								</select>

							</div>

							<label class="control-label-right" for="inputTelefono"><strong>Teléfono</strong></label>
							<div class="controls">

								<input type="text" name="telefono" id="inputTelefono" placeholder="Teléfono" value="{{ $propietarios['tlf_cel'] }}">

							</div>

						</div>

					</div>

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
							<div class="controls">

								<input type="text" name="email" id="inputEmail" placeholder="Correo Electrónico" value="{{ $propietarios['email'] }}">

							</div>

							<label class="control-label-right" for="inputUsuario"><strong>Usuario</strong></label>
							<div class="controls">

								<input type="text" name="usuario" id="inputUsuario" placeholder="Usuario">

							</div>

							<label class="control-label-right" for="inputPassword"><strong>Contraseña</strong></label>
							<div class="controls">

								<input type="text" name="contrasena" id="inputassword" placeholder="Contraseña">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Grupo</strong></label>
							<div class="controls">

								<select name="grupo">
									@if(!empty($grupos))
										@foreach($grupos as $grp)
											<option value="{{ $grp->id }}">{{ $grp->descripcion }}</option>
										@endforeach
									@endif
								</select>

							</div>

						</div>						

					</div>

				</div>

				<div align="center">
					<div class="large-button">
						<input type="submit" name="agregar" class="btn btn-block btn-success" value="Agregar">
					</div>
				</div>

			</form>

		</div>

	</div>

</div>


@endsection