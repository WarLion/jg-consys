@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

		    <a href="{{ URL::to('admin/propietarios/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
		    <a href="{{ URL::to('admin/propietarios'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/propietarios/agregar') }}" method="post" class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						{{ $message }}

						<div class="control-group">

							<label class="control-label-right" for="inputCedula"><strong>Cédula</strong></label>
							<div class="controls">

								<input type="text" name="cedula" id="inputCedula" placeholder="Cédula">

							</div>

							<label class="control-label-right" for="inputNombres"><strong>Nombre(s)</strong></label>
							<div class="controls">

								<input type="text" name="nombre" id="inputNombres" placeholder="Nombre(s) y apellido(s)">

							</div>

							<label class="control-label-right" for="inputTlfCasa"><strong>Sexo</strong></label>
							<div class="controls">

								<select name="sexo">
									<option value="Femenino">Femenino</option>
									<option value="Masculino">Masculino</option>
								</select>

							</div>

							<label class="control-label-right" for="inputCelular"><strong>Tlf. Celular</strong></label>
							<div class="controls">

								<input type="text" name="celular" id="inputCelular" placeholder="Teléfono celular">

							</div>



						</div>

					</div>

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputTlfCasa"><strong>Tlf. Casa</strong></label>
							<div class="controls">

								<input type="text" name="casa" id="inputTlfCasa" placeholder="Teléfono casa">

							</div>

							<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
							<div class="controls">

								<input type="text" name="email" id="inputEmail" placeholder="Correo Electrónico">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Parcela</strong></label>
							<div class="controls">

								<input type="text" name="parcela" id="inputParcela" placeholder="Parcela">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Fecha de nacimiento</strong></label>
							<div class="controls">

								<input type="text" name="fechan" id="inputParcela" placeholder="dd/mm/aaaa">

							</div>

						</div>

					</div>

				</div>

				<input type="submit" class="btn btn-primary" name="add" value="Agregar">

			</form>

		</div>

	</div>

</div>


@endsection