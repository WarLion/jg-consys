@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxpagar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxpagar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/ctasxpagar/documento'); }}" class="btn"><i class="icon-file"></i> Tipos de Documento</a>-->
			    <a href="{{ URL::to('admin/ctasxpagar/pagos'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Pagos</a>
			    
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/ctasxpagar/pagos/registro') }}" name="form" method="post" class="form-modules">

			<div class="row-fluid">

			{{ $message }}

				<div class="span6">

					<p><strong>Datos</strong></p> 

					<hr class="bs-docs-separator">

					<div class="well">

						<table class="table table-hover">

					      <thead>
					        <tr>
					          <th>RIF</th>
					          <th>Proveedor</th>
					          <th style="width: 36px;"></th>
					        </tr>
					      </thead>

					      <tbody>
					        @if(!empty($proveedor))
					        	@foreach($proveedor as $prv)
									<td>{{ $prv->nro }} <input type="hidden" name="rif" value="{{ $rif }}"></td>
									<td>{{ $prv->descripcion }}</td>
								@endforeach
							@else
					        	<tr>
									<td>---</td>
									<td>---</td>
								</tr>
							@endif			        
					      </tbody>

					    </table>

				    </div>

				</div>

			</div>

			<strong>Detalle</strong>

			<hr class="bs-docs-separator">

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>Referencia</th>
		          <th>Concepto</th>
		          <th>Fecha</th>
		          <th>Monto</th>
		          <th>Opciones</th>
		        </tr>
		      </thead>

		      <tbody>
		        @if(!empty($detalle_prov))
		        	@foreach($detalle_prov as $dprv)
		        	<?php $x++ ?>
		        	<tr>
						<td>{{ $dprv->nro }}</td>
						<td>{{ $dprv->concepto_codigo }}</td>
						<td>{{ $dprv->fecha }}</td>
						<td>{{ $dprv->monto }}</td>
						<td><input type="checkbox" name="referencia{{ $x }}" value="{{ $dprv->nro }}" onclick="if (this.checked) sumar({{ $dprv->monto }}); else restar({{ $dprv->monto }})" id="selectMontos"></td>
					</tr>
					@endforeach
				@else
		        	<tr>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
						<td>---</td>
					</tr>
				@endif       
		      </tbody>

		    </table>

		    <hr class="bs-docs-separator">

			<div class="control-group">
				<label class="control-label" for="inputMonto"><strong>Total monto</strong></label>
				<div class="controls">
					<input type="text" id="monto" name="monto" value="0" class="input-small" readonly>
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
							    	<input type="submit" class="btn btn-success" name="efectivo" value="Registrar pago">
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

									<input type="submit" class="btn btn-success" name="deposito" value="Registrar pago">

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

									<input type="submit" class="btn btn-success" name="cheque" value="Registrar pago">

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

								<input type="submit" class="btn btn-success" name="transferencia" value="Registrar pago">
							    
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

									<input type="submit" class="btn btn-success" name="debito" value="Registrar pago">

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

									<input type="submit" class="btn btn-success" name="credito" value="Registrar pago">

							  	</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		</form>

			<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 id="myModalLabel">Delete Confirmation</h3>
			    </div>
			    
			    <div class="modal-body">
			        <p class="error-text">Are you sure you want to delete the user?</p>
			    </div>
			    
			    <div class="modal-footer">
			        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
			    </div>
			    
			</div>

		</div>

	</div>

</div>

@endsection

@section('postscript')

<script type="text/javascript">
//Script que me permite sumar los montos cuando se selecciona un CheckBox
var monto = 0;

	function sumar(valor) {
		monto += valor;
		document.form.monto.value = monto;
	}

	function restar(valor) {
		monto -= valor;
		document.form.monto.value = monto;
	}
</script>

@endsection