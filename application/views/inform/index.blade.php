@layout('layouts/login')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p class="lead">Informar Pago de Condomninio</p>

				<div class="row-fluid show-grid">

					<div class="span6">

						<p>Mantente al día con el condominio, por ello te ofrecemos tres formas para realizar tus pagos:</p>

						<ul>
							<li>Depósito bancario</li>
							<li>Transferencia electrónica</li>
							<li>Cheque</li>
							<li>Efectivo por taquilla</li>
						</ul>

					</div>

					<div class="span6">

						<p><strong>Datos de la cuenta bancaria:</strong></p>

						<ul>
							<li>Nro. cuenta:  0151-0083-47-4483012953</li>
							<li>Banco:  Fondo Común</li>
							<li>Titular:  Junta de Propietarios de Villas de Aragua, A.C.</li>
							<li>RIF:  J-29826089-0</li>
						</ul>

					</div>

				</div>

			<div>&nbsp;</div>

			<form class="bs-docs-example form-horizontal">

			<div class="row-fluid show-grid">

				<h4>Registrar pago</h4> <br />
				<div class="span7">

					<div class="well">

						<div class="control-group">
							<label class="control-label">Método de pago</label>
							<div class="controls">
								<select>
									<option>Depósito</option>
									<option>Transferencia</option>
									<option>Cheque</option>
								</select>
							</div>
						</div>									
						<div class="control-group">
							<label class="control-label">Banco</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="Banco Provincial"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Referencia</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="3434455"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Fecha de pago</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="16-07-2013"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Monto</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="160,00"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Concepto</label>
							<div class="controls"><input type="text" id="cedula" name="cedula" value="Pago de condominio del mes de Junio"></div>
						</div>
						<div class="control-group">
							<label class="control-label">Archivo</label>
							<div class="controls"><input type="file" id="cedula" name="cedula" value=""></div>
						</div>
						<div class="control-group">
							<label class="control-label">&nbsp;</label>
							<div class="controls"><button class="btn btn-small" type="submit" name="conducta">Enviar</button></div>
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