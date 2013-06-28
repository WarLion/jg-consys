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

			<form class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputCedula"><strong>Cédula</strong></label>
							<div class="controls">

								<input type="text" id="inputCedula" placeholder="Cédula">

							</div>

							<label class="control-label-right" for="inputNombres"><strong>Nombre(s)</strong></label>
							<div class="controls">

								<input type="text" id="inputNombres" placeholder="Nombre(s) y apellido(s)">

							</div>

							<label class="control-label-right" for="inputCelular"><strong>Tlf. Celular</strong></label>
							<div class="controls">

								<input type="text" id="inputCelular" placeholder="Teléfono celular">

							</div>

							<label class="control-label-right" for="inputTlfCasa"><strong>Tlf. Casa</strong></label>
							<div class="controls">

								<input type="text" id="inputTlfCasa" placeholder="Teléfono casa">

							</div>

						</div>

					</div>

					<div class="span6">

						<div class="control-group">

							<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
							<div class="controls">

								<input type="text" id="inputEmail" placeholder="Correo Electrónico">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Parcela</strong></label>
							<div class="controls">

								<input type="text" id="inputParcela" placeholder="Parcela">

							</div>

							<label class="control-label-right" for="inputParcela"><strong>Fecha de nacimiento</strong></label>
							<div class="controls">

								<input type="text" id="inputParcela" placeholder="dd/mm/aaaa">

							</div>

						</div>

					</div>

				</div>

				<a href="{{ URL::to('#'); }}" class="btn btn-primary">Agregar</i></a>

			</form>

		</div>

	</div>

</div>


@endsection