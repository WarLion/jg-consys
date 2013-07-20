@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/personal/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/personal'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/personal/cargos'); }}" class="btn"><i class="icon-briefcase"></i> Cargos</a>
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputCedula"><strong>Cédula</strong></label>
							<div class="controls">

								<input type="text" id="inputCedula" placeholder="Cédula" value="20449123">

							</div>

							<label class="control-label-right" for="inputNombres"><strong>Nombre(s)</strong></label>
							<div class="controls">

								<input type="text" id="inputNombres" placeholder="Nombre(s) y apellido(s)" value="Juliet Oriana Garcia Duque">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Sexo</strong></label>
							<div class="controls">

								<select>
									<option>Femenino</option>
									<option>Masculino</option>
								</select>

							</div>

							<label class="control-label-right" for="inputTlfCelular"><strong>Tlf. Celular</strong></label>
							<div class="controls">

								<input type="text" id="inputTlfCelular" placeholder="Teléfono Celular" value="04243809523">

							</div>

							<label class="control-label-right" for="inputTlfCasa"><strong>Tlf. Casa</strong></label>
							<div class="controls">

								<input type="text" id="inputTlfCasa" placeholder="Teléfono Casa" value="02432694811">

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

							<label class="control-label-right" for="inputNacimiento"><strong>Fecha Nacimiento</strong></label>
							<div class="controls">

								<input type="text" id="Nacimiento" placeholder="dd/mm/aaaa" value="19/06/2012">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Cargo</strong></label>
							<div class="controls">

								<select>
									<option>Secretaria</option>
									<option>Contador público</option>
									<option>Vigilante</option>
								</select>

							</div>

							<label class="control-label-right" for="inputEstado"><strong>Estado</strong></label>
							<div class="controls">

								<input class="input-small" type="text" id="inputEstado" value="Activo" readonly>

							</div>

						</div>

					</div>

				</div>

				<a href="{{ URL::to('#'); }}" class="btn btn-success">Actualizar <i class="icon-refresh icon-white"></i></a>
				<a href="{{ URL::to('#'); }}" class="btn btn-danger">Desactivar <i class="icon-remove icon-white"></i></a>

			</form>

		</div>

	</div>

</div>


@endsection