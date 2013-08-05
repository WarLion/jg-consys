@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><span style="font-size:23px;">Agregar -</span> <snap style="color:#51a351; font-size:23px;">Proveedores</snap></p> <hr />

			<form action="{{ URL::to('admin/proveedores/agregar') }}" method="post" class="form-modules">

					<div class="row-fluid">

						<div class="span6">

							{{ $message; }}

							<div class="control-group">

								<label class="control-label-right" for="inputRif"><strong>RIF</strong></label>
								<div class="controls">

									<input type="text" name="rif" id="rif" placeholder="rif">

								</div>

								<label class="control-label-right" for="inputNombre"><strong>Nombre</strong></label>
								<div class="controls">

									<input type="text" name="nombre" id="nombre" placeholder="Nombre">

								</div>

								<label class="control-label-right" for="inputTelefono"><strong>Teléfono</strong></label>
								<div class="controls">

									<input type="text" name="telefono" id="telefono" placeholder="Teléfono">

								</div>

							</div>

						</div>

						<div class="span6">

							<div class="control-group">

								<label class="control-label-right" for="inputEmail"><strong>Correo Electrónico</strong></label>
								<div class="controls">

									<input type="text" name="email" id="inputEmail" placeholder="Correo Electrónico">

								</div>

								<label class="control-label-right" for="inputDireccion"><strong>Dirección</strong></label>
								<div class="controls">

									<input type="text" name="direccion" id="Direccion" placeholder="Dirección">

								</div>

							</div>

						</div>

					</div>

				<input type="submit" class="btn btn-success" name="add" value="Agregar">

			</form>

		</div>

	</div>

</div>


@endsection