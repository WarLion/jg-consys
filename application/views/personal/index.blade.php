@layout('layouts/login')

@section('content')

<div class="container">

	<div class="row">
	<div class="text-right" align="right"><a href="" class="btn btn-primary" type="button">Cerrar Sesión</a></div>

		<div class="span12">

			<p class="lead">Datos Personales</p>

			<div>&nbsp;</div>

			<form class="bs-docs-example form-horizontal">

				<div class="row-fluid show-grid">

					<div class="well span6">
								
						<div class="control-group">
							<label class="control-label">Nombre</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="DUQUE, JULIA"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Cédula</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="9126116"></div>
						</div>

						<div class="control-group">
							<label class="control-label">Sexo</label>
							<div class="controls">
								<select>
									<option>Femenino</option>
									<option>Masculino</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Fecha de Nacimiento</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="19-06-1963"></div>
						</div>

					</div>

					<div class="well span6">

						<div class="control-group">
							<label class="control-label">Nro. Parcela</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="36"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Calle</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="Guiripa"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Teléfono Casa</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="02432694811"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Teléfono Celular</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="04247043338"></div>
						</div>

					</div>

					<div align="center">
						<button class="btn btn-primary" type="submit" name="conducta">Actualizar</button>
					</div>

				</div>

			</form>

			<div>&nbsp;</div>

		</div>

	</div>

</div>

@endsection