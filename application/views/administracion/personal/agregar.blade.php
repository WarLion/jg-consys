@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Personal</span> - Agregar</h3> <hr />

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/personal/agregar') }}" method="post" class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						@if(!empty($message))
							<div class="alert alert-success">{{ $message }}</div>
						@endif

						<div class="control-group">

							<label class="control-label-right" for="inputCedula"><strong>Cédula</strong></label>
							<div class="controls">

								<input type="text" id="inputCedula" placeholder="Cédula" name="cedula">

							</div>

							<label class="control-label-right" for="inputNombres"><strong>Nombre(s)</strong></label>
							<div class="controls">

								<input type="text" id="inputNombres" placeholder="Nombre(s) y apellido(s)"  name="nombre">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Sexo</strong></label>
							<div class="controls">

								<select  name="sexo">
									<option value="Femenino">Femenino</option>
									<option value="Masculino">Masculino</option>
								</select>

							</div>

							<label class="control-label-right" for="inputTlfCelular"><strong>Tlf. Celular</strong></label>
							<div class="controls">

								<input type="text" id="inputTlfCelular" placeholder="Teléfono Celular"  name="celular">

							</div>

							<label class="control-label-right" for="inputTlfCasa"><strong>Tlf. Casa</strong></label>
							<div class="controls">

								<input type="text" id="inputTlfCasa" placeholder="Teléfono Casa" name="casa">

							</div>

						</div>

					</div>

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
							<div class="controls">

								<input type="text" id="inputEmail" placeholder="Correo Electrónico"  name="email">

							</div>

							<label class="control-label-right" for="inputDireccion"><strong>Dirección</strong></label>
							<div class="controls">

								<input type="text" id="Direccion" placeholder="Dirección"  name="direccion">

							</div>

							<label class="control-label-right" for="inputNacimiento"><strong>Fecha Nacimiento</strong></label>
							<div class="controls">

								<input type="text" id="Nacimiento" placeholder="dd/mm/aaaa"  name="fechan">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Cargo</strong></label>
							<div class="controls">

								<select  name="cargo">

									@if(!empty($cargos))
										@foreach($cargos as $crg)
											<option value="{{ $crg->id }}">{{ $crg->descripcion }}</option>
										@endforeach
									@else
											<option value="Ninguno">Ninguno</option>
									@endif

								</select>

							</div>

						</div>

					</div>

				</div>

				<div align="center">
					<div class="large-button">
						<input type="submit" class="btn btn-block btn-success" name="add" value="Agregar">
					</div>
				</div>

			</form>

		</div>

	</div>

</div>


@endsection