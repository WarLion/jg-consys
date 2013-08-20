@layout('layouts/login')

@section('content')

<div class="container">

	<div class="row">

		<div class="text-right" align="right"><a href="{{ URL::to('login') }}" class="btn btn-primary" type="button">Cerrar Sesión</a></div>

		<div class="span12">

			<p class="lead">Solicitud de Documentos</p>

			<h4>Pasos para la solicitud de documentos:</h4><br />

			<ul>
				<li>Seleccione el tipo de documento que desea solicitar.</li>
				<li>Ingrese y/o verifique los datos a enviar. Nota: estos datos son necesarios para realizar su documento.</li>
				<li>Luego de verificar sus datos, y si estos mismos son correctos, pulse el botón Enviar Solicitud.</li>
				<li>Usted recibirá en su correo electrónico, aproximadamente en 3 días hábiles, el aviso de que el documento ya esta listo para ser retirado por taquilla.</li>
			</ul>

			<div>&nbsp;</div>

			<form class="bs-docs-example form-horizontal">

			<div class="row-fluid show-grid">

				<div class="span6">

					<div class="accordion no-margin" id="accordion2">
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Carta de buena conducta</a></div>
							<div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
								<div class="accordion-inner">
									<div class="control-group">
										<label class="control-label">Propietario</label>
										<div class="controls"><input type="text" id="propietario" name="propietario" value="DUQUE JULIA"></div>
									</div>									
									<div class="control-group">
										<label class="control-label">Cédula</label>
										<div class="controls"><input type="text" id="cedula" name="cedula" value="9126116"></div>
						            </div>
									<div class="control-group">
										<label class="control-label">&nbsp;</label>
										<div class="controls"><button class="btn btn-small" type="submit" name="conducta">Enviar solicitud</button></div>
						            </div>
								</div>
							</div>
						</div>

						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Carta de residencia</a></div>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="control-group">
									<label class="control-label">Propietario</label>
									<div class="controls"><input type="text" id="propietario" name="propietario" value="DUQUE JULIA"></div>
								</div>
								
								<div class="control-group">
									<label class="control-label">Cédula</label>
									<div class="controls"><input type="text" id="cedula" name="cedula" value="9126116"></div>
					            </div>
							</div>
						</div>
					</div>

				</div>

				<div class="span6">

					<div class="accordion no-margin" id="accordion2">
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Solvencia de condominio</a></div>
							<div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
								<div class="accordion-inner">
									<input type="text" name="propietario" value="DUQUE JULIA">
									<input type="text" name="cedula" value="916116">
									<button class="btn btn-small" type="button">Enviar solicitud</button>
								</div>
							</div>
						</div>

						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Constancia de inhabitalidad</a></div>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="accordion-inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</div>
							</div>
						</div>
					</div>

				</div>

			</div>

			</form>

			<div>&nbsp;</div>

		</div>

	</div>

</div>

@endsection