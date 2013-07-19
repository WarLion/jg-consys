@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

				<a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
				<a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
				<!--<a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>-->
				<a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>
				
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/recibos/generar/3') }}" name="form" method="post" class="form-modules">

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
							</tr>
						  </thead>

						  <tbody>
							<tr>
							  <td>{{ $generar['parcela'] }} 	<input type="hidden" value="{{ $generar['parcela'] }}" name="hparcela"></td>
							  <td>{{ $generar['ci'] }} 			<input type="hidden" value="{{ $generar['ci'] }}" name="hci"></td>
							  <td>{{ $generar['name'] }} 		<input type="hidden" value="{{ $generar['name'] }}" name="hname"></td>
							</tr>
						  </tbody>

						</table>

					</div>

				</div>

			</div>

		    <hr class="bs-docs-separator">

			<div class="control-group">
				<label class="control-label" for="inputMonto"><strong>Total monto</strong></label>
				<div class="controls">
					<input type="text" id="monto" name="monto" value="{{ $generar['monto'] }}" class="input-small" readonly>
				</div>
			</div>

			<hr class="bs-docs-separator">

			<strong>Formas de Pago</strong>

			<hr class="bs-docs-separator">

			<div class="row-fluid">

				<div class="span6">

					<div class="accordion" id="accordion1">
						  
						<div class="accordion-group">
						    
							<div class="accordion-heading">
							  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseUno">
							    - Efectivo
							  </a>
							</div>
							<div id="collapseUno" class="accordion-body collapse">
							  	<div class="accordion-inner">
							    	<input type="submit" class="btn btn-primary" name="efectivo" value="Registrar pago">
							  	</div>
							</div>

						</div>
						  
						<div class="accordion-group">

							<div class="accordion-heading">
							  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseDos">
							    - Depósito
							  </a>
							</div>
							<div id="collapseDos" class="accordion-body collapse">
							  	<div class="accordion-inner">

									<!-- Deposito -->
									<div class="control-group">

										<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
										<div class="controls">

											<select name='banco'>
													<option selected='selected'>Banco Mercantil</option>
													<option>Banesco</option>
													<option>Banco de Venezuela</option>
													<option>Banco Provincial</option>
													<option>100% Banco</option>
													<option>Banco del Tesoro</option>
													<option>Banco Caroní</option>
													<option>Banco Canarias de Venezuela</option>
													<option>Banco Confederado</option>
													<option>Bolívar Banco</option>
													<option>Corp Banca</option>
													<option>Banco de Crédito de Colombia</option>
													<option>Banco Do Brasil</option>
													<option>Banco del Caribe</option>
													<option>Bancoro</option>
													<option>Banco Sofitasa</option>
													<option>Banpro</option>
													<option>Stanford Bank</option>
													<option>Banco Tequendama</option>
													<option>Banco Fondo Común</option>
													<option>Banfoandes</option>
													<option>Banco Occidental de Descuento</option>
													<option>Banco Venezolano de Crédito</option>
													<option>Banco Guayana</option>
													<option>Banco Exterior</option>
													<option>Banco Industrial de Venezuela</option>
													<option>Banco Plaza</option>
													<option>Citibank</option>
													<option>Total Bank</option>
													<option>Nuevo Mundo</option>
													<option>Banco Federal</option>
													<option>Casa Propia</option>
													<option>Banco Del Sur</option>
													<option>Banco Mi Casa</option>
													<option>Banco Bicentenario</option>
											    </select>

										</div>

									</div>

									<div class="control-group">
										<label class="control-label-right" for="inputReferencia"><strong>Nº depósito</strong></label>
										<div class="controls">
											<input type="text" id="referencia" name="referencia">
										</div>
									</div>

									<input type="submit" class="btn btn-primary" name="deposito" value="Registrar pago">

							  	</div>

							</div>

						</div>

						<div class="accordion-group">

							<div class="accordion-heading">
							  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTres">
							    - Cheque
							  </a>
							</div>
							<div id="collapseTres" class="accordion-body collapse">
							  	
							  	<div class="accordion-inner">
							    
							  		<div class="control-group">

										<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
										<div class="controls">

											<select name='banco'>
													<option selected='selected'>Banco Mercantil</option>
													<option>Banesco</option>
													<option>Banco de Venezuela</option>
													<option>Banco Provincial</option>
													<option>100% Banco</option>
													<option>Banco del Tesoro</option>
													<option>Banco Caroní</option>
													<option>Banco Canarias de Venezuela</option>
													<option>Banco Confederado</option>
													<option>Bolívar Banco</option>
													<option>Corp Banca</option>
													<option>Banco de Crédito de Colombia</option>
													<option>Banco Do Brasil</option>
													<option>Banco del Caribe</option>
													<option>Bancoro</option>
													<option>Banco Sofitasa</option>
													<option>Banpro</option>
													<option>Stanford Bank</option>
													<option>Banco Tequendama</option>
													<option>Banco Fondo Común</option>
													<option>Banfoandes</option>
													<option>Banco Occidental de Descuento</option>
													<option>Banco Venezolano de Crédito</option>
													<option>Banco Guayana</option>
													<option>Banco Exterior</option>
													<option>Banco Industrial de Venezuela</option>
													<option>Banco Plaza</option>
													<option>Citibank</option>
													<option>Total Bank</option>
													<option>Nuevo Mundo</option>
													<option>Banco Federal</option>
													<option>Casa Propia</option>
													<option>Banco Del Sur</option>
													<option>Banco Mi Casa</option>
													<option>Banco Bicentenario</option>
											    </select>

										</div>

									</div>

									<div class="control-group">
										<label class="control-label-right" for="inputReferencia"><strong>Nº cheque</strong></label>
										<div class="controls">
											<input type="text" id="referencia" name="referencia">
										</div>
									</div>

									<input type="submit" class="btn btn-primary" name="cheque" value="Registrar pago">

							  	</div>

							</div>

						</div>

					</div>

				</div>

				<div class="span6">

					<div class="accordion" id="accordion2">
						  
						<div class="accordion-group">
						    
							<div class="accordion-heading">
							  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseCuatro">
							    - Transferencia
							  </a>
							</div>
							<div id="collapseCuatro" class="accordion-body collapse">
							  <div class="accordion-inner">

							  	<div class="control-group">

									<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
									<div class="controls">

										<select name='banco'>
											<option selected='selected'>Banco Mercantil</option>
											<option>Banesco</option>
											<option>Banco de Venezuela</option>
											<option>Banco Provincial</option>
											<option>100% Banco</option>
											<option>Banco del Tesoro</option>
											<option>Banco Caroní</option>
											<option>Banco Canarias de Venezuela</option>
											<option>Banco Confederado</option>
											<option>Bolívar Banco</option>
											<option>Corp Banca</option>
											<option>Banco de Crédito de Colombia</option>
											<option>Banco Do Brasil</option>
											<option>Banco del Caribe</option>
											<option>Bancoro</option>
											<option>Banco Sofitasa</option>
											<option>Banpro</option>
											<option>Stanford Bank</option>
											<option>Banco Tequendama</option>
											<option>Banco Fondo Común</option>
											<option>Banfoandes</option>
											<option>Banco Occidental de Descuento</option>
											<option>Banco Venezolano de Crédito</option>
											<option>Banco Guayana</option>
											<option>Banco Exterior</option>
											<option>Banco Industrial de Venezuela</option>
											<option>Banco Plaza</option>
											<option>Citibank</option>
											<option>Total Bank</option>
											<option>Nuevo Mundo</option>
											<option>Banco Federal</option>
											<option>Casa Propia</option>
											<option>Banco Del Sur</option>
											<option>Banco Mi Casa</option>
											<option>Banco Bicentenario</option>
										</select>

									</div>

								</div>

								<div class="control-group">
									<label class="control-label-right" for="inputReferencia"><strong>Nº transferencia</strong></label>
									<div class="controls">
										<input type="text" id="referencia" name="referencia">
									</div>
								</div>

								<input type="submit" class="btn btn-primary" name="transferencia" value="Registrar pago">
							    
							  </div>

							</div>

						</div>
						  
						<div class="accordion-group">

							<div class="accordion-heading">
							  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseCinco">
							    - Tarjeta de Débito
							  </a>
							</div>
							<div id="collapseCinco" class="accordion-body collapse">
							  	
							  	<div class="accordion-inner">
							    
							  		<div class="control-group">

										<label class="control-label-right" for="inputParcela"><strong>Entidad banco</strong></label>
										<div class="controls">

											<select name='banco'>
												<option selected='selected'>Banco Mercantil</option>
												<option>Banesco</option>
												<option>Banco de Venezuela</option>
												<option>Banco Provincial</option>
												<option>100% Banco</option>
												<option>Banco del Tesoro</option>
												<option>Banco Caroní</option>
												<option>Banco Canarias de Venezuela</option>
												<option>Banco Confederado</option>
												<option>Bolívar Banco</option>
												<option>Corp Banca</option>
												<option>Banco de Crédito de Colombia</option>
												<option>Banco Do Brasil</option>
												<option>Banco del Caribe</option>
												<option>Bancoro</option>
												<option>Banco Sofitasa</option>
												<option>Banpro</option>
												<option>Stanford Bank</option>
												<option>Banco Tequendama</option>
												<option>Banco Fondo Común</option>
												<option>Banfoandes</option>
												<option>Banco Occidental de Descuento</option>
												<option>Banco Venezolano de Crédito</option>
												<option>Banco Guayana</option>
												<option>Banco Exterior</option>
												<option>Banco Industrial de Venezuela</option>
												<option>Banco Plaza</option>
												<option>Citibank</option>
												<option>Total Bank</option>
												<option>Nuevo Mundo</option>
												<option>Banco Federal</option>
												<option>Casa Propia</option>
												<option>Banco Del Sur</option>
												<option>Banco Mi Casa</option>
												<option>Banco Bicentenario</option>
											</select>

										</div>

									</div>

									<div class="control-group">

										<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
										<div class="controls">

											<select name='banco2'>
												<option selected='selected'>Banco Mercantil</option>
												<option>Banesco</option>
												<option>Banco de Venezuela</option>
												<option>Banco Provincial</option>
												<option>100% Banco</option>
												<option>Banco del Tesoro</option>
												<option>Banco Caroní</option>
												<option>Banco Canarias de Venezuela</option>
												<option>Banco Confederado</option>
												<option>Bolívar Banco</option>
												<option>Corp Banca</option>
												<option>Banco de Crédito de Colombia</option>
												<option>Banco Do Brasil</option>
												<option>Banco del Caribe</option>
												<option>Bancoro</option>
												<option>Banco Sofitasa</option>
												<option>Banpro</option>
												<option>Stanford Bank</option>
												<option>Banco Tequendama</option>
												<option>Banco Fondo Común</option>
												<option>Banfoandes</option>
												<option>Banco Occidental de Descuento</option>
												<option>Banco Venezolano de Crédito</option>
												<option>Banco Guayana</option>
												<option>Banco Exterior</option>
												<option>Banco Industrial de Venezuela</option>
												<option>Banco Plaza</option>
												<option>Citibank</option>
												<option>Total Bank</option>
												<option>Nuevo Mundo</option>
												<option>Banco Federal</option>
												<option>Casa Propia</option>
												<option>Banco Del Sur</option>
												<option>Banco Mi Casa</option>
												<option>Banco Bicentenario</option>
											</select>

										</div>

									</div>


									<div class="control-group">
										<label class="control-label-right" for="inputReferencia"><strong>Nº transacción</strong></label>
										<div class="controls">
											<input type="text" id="referencia" name="referencia">
										</div>
									</div>

									<input type="submit" class="btn btn-primary" name="debito" value="Registrar pago">

							  	</div>

							</div>

						</div>

						<div class="accordion-group">

							<div class="accordion-heading">
							  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeis">
							    - Tarjeta de Crédito
							  </a>
							</div>
							<div id="collapseSeis" class="accordion-body collapse">
							  	<div class="accordion-inner">
							    
							  		<div class="control-group">

										<label class="control-label-right" for="inputParcela"><strong>Entidad banco</strong></label>
										<div class="controls">

											<select name='banco'>
												<option selected='selected'>Banco Mercantil</option>
												<option>Banesco</option>
												<option>Banco de Venezuela</option>
												<option>Banco Provincial</option>
												<option>100% Banco</option>
												<option>Banco del Tesoro</option>
												<option>Banco Caroní</option>
												<option>Banco Canarias de Venezuela</option>
												<option>Banco Confederado</option>
												<option>Bolívar Banco</option>
												<option>Corp Banca</option>
												<option>Banco de Crédito de Colombia</option>
												<option>Banco Do Brasil</option>
												<option>Banco del Caribe</option>
												<option>Bancoro</option>
												<option>Banco Sofitasa</option>
												<option>Banpro</option>
												<option>Stanford Bank</option>
												<option>Banco Tequendama</option>
												<option>Banco Fondo Común</option>
												<option>Banfoandes</option>
												<option>Banco Occidental de Descuento</option>
												<option>Banco Venezolano de Crédito</option>
												<option>Banco Guayana</option>
												<option>Banco Exterior</option>
												<option>Banco Industrial de Venezuela</option>
												<option>Banco Plaza</option>
												<option>Citibank</option>
												<option>Total Bank</option>
												<option>Nuevo Mundo</option>
												<option>Banco Federal</option>
												<option>Casa Propia</option>
												<option>Banco Del Sur</option>
												<option>Banco Mi Casa</option>
												<option>Banco Bicentenario</option>
											</select>

										</div>

									</div>

									<div class="control-group">

										<label class="control-label-right" for="inputParcela"><strong>Banco</strong></label>
										<div class="controls">

											<select name='banco2'>
												<option selected='selected'>Banco Mercantil</option>
												<option>Banesco</option>
												<option>Banco de Venezuela</option>
												<option>Banco Provincial</option>
												<option>100% Banco</option>
												<option>Banco del Tesoro</option>
												<option>Banco Caroní</option>
												<option>Banco Canarias de Venezuela</option>
												<option>Banco Confederado</option>
												<option>Bolívar Banco</option>
												<option>Corp Banca</option>
												<option>Banco de Crédito de Colombia</option>
												<option>Banco Do Brasil</option>
												<option>Banco del Caribe</option>
												<option>Bancoro</option>
												<option>Banco Sofitasa</option>
												<option>Banpro</option>
												<option>Stanford Bank</option>
												<option>Banco Tequendama</option>
												<option>Banco Fondo Común</option>
												<option>Banfoandes</option>
												<option>Banco Occidental de Descuento</option>
												<option>Banco Venezolano de Crédito</option>
												<option>Banco Guayana</option>
												<option>Banco Exterior</option>
												<option>Banco Industrial de Venezuela</option>
												<option>Banco Plaza</option>
												<option>Citibank</option>
												<option>Total Bank</option>
												<option>Nuevo Mundo</option>
												<option>Banco Federal</option>
												<option>Casa Propia</option>
												<option>Banco Del Sur</option>
												<option>Banco Mi Casa</option>
												<option>Banco Bicentenario</option>
											</select>

										</div>

									</div>

									<div class="control-group">
										<label class="control-label-right" for="inputReferencia"><strong>Nº transacción</strong></label>
										<div class="controls">
											<input type="text" id="referencia" name="referencia">
										</div>
									</div>

									<input type="submit" class="btn btn-primary" name="credito" value="Registrar pago">

							  	</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<!--<a href="{{ URL::to('admin/recibos/generar/3'); }}" class="btn btn-primary">Continuar <i class="icon-circle-arrow-right icon-white"></i></a>-->

			</form>

		</div>

	</div>

</div>


@endsection