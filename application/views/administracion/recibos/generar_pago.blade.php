@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

				<a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
				<a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
				<a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>
				<a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>
				
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

			<div class="row-fluid">

				<div class="span6">

					<p><strong>Datos</strong></p> 

					<hr class="bs-docs-separator">

					<div class="well">

						<table class="table table-hover">

						  <thead>
							<tr>
							  <th>Parcela</th>
							  <th>Cédula</th>
							  <th>Propietario</th>
							  <th style="width: 36px;"></th>
							</tr>
						  </thead>

						  <tbody>
							<tr>
							  <td>36</td>
							  <td>9126116</td>
							  <td>JULIA DUQUE</td>
							</tr>			        
						  </tbody>

						</table>

					</div>

				</div>

			</div>

			<div>&nbsp;</div>

			<div class="row-fluid">

				<p><strong>Forma de pago</strong></p>

				<hr class="bs-docs-separator">

				<div>

					<div class="span6">

						<div class="well">

							<div class="control-group">
								<label class="control-label-right" for="inputMonto"><strong>Monto</strong></label>
								<div class="controls">
									<input type="text" id="monto" name="monto" class="input-small" readonly>
								</div>
							</div>

							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Forma de pago</strong></label>
								<div class="controls">

									<select>

										<option>Efectivo</option>
										<option>Depósito</option>
										<option>Cheque</option>
										<option>Transferencia</option>
										<option>Tarjeta de débito</option>
										<option>Tarjeta de crédito</option>

									</select>

								</div>

							</div>

						</div>

					</div>

					<div class="span6">

						<div class="well">

							<!-- Deposito -->
							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
								<div class="controls">

									<select>

										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>

									</select>

								</div>

							</div>

							<div class="control-group">
								<label class="control-label-right" for="inputReferencia"><strong>Nº depósito</strong></label>
								<div class="controls">
									<input type="text" id="referencia" name="referencia">
								</div>
							</div>

							<!-- Cheque -->
							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
								<div class="controls">

									<select>

										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>

									</select>

								</div>

							</div>

							<div class="control-group">
								<label class="control-label-right" for="inputReferencia"><strong>Nº cheque</strong></label>
								<div class="controls">
									<input type="text" id="referencia" name="referencia">
								</div>
							</div>

							<!-- Transferencia -->
							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
								<div class="controls">

									<select>

										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>

									</select>

								</div>

							</div>

							<div class="control-group">
								<label class="control-label-right" for="inputReferencia"><strong>Nº transferencia</strong></label>
								<div class="controls">
									<input type="text" id="referencia" name="referencia">
								</div>
							</div>

							<!-- Tarjeta débito o crédito -->
							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Entidad banco</strong></label>
								<div class="controls">

									<select>

										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>

									</select>

								</div>

							</div>

							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
								<div class="controls">

									<select>

										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>

									</select>

								</div>

							</div>

							<div class="control-group">
								<label class="control-label-right" for="inputReferencia"><strong>Nº transacción</strong></label>
								<div class="controls">
									<input type="text" id="referencia" name="referencia">
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

			<a href="{{ URL::to('admin/recibos/generar/3'); }}" class="btn btn-primary">Continuar <i class="icon-circle-arrow-right icon-white"></i></a>

			</form>

		</div>

	</div>

</div>


@endsection