@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Parcelas</span> - Agregar</h3> <hr />

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/parcelas/agregar') }}" method="post" class="form-modules">

				<div class="row-fluid">

						@if(!empty($message))
							<div class="alert alert-success">{{ $message }}</div>
						@endif

						<div class="control-group">

							<div class="span6">

								<label class="control-label-right" for="inputParcela"><strong>Nro. Parcela</strong></label>
								<div class="controls">

									<input type="text" id="parcela" name="parcela" placeholder="Nro. Parcela">

								</div>

								<label class="control-label-right" for="inputCodigo"><strong>Calle</strong></label>
								<div class="controls">

									<select name="calle">
										@foreach($calles as $cal)
											<option value="{{ $cal->nombre }}">{{ $cal->nombre }}</option>
										@endforeach
									</select>

								</div>

								<label class="control-label-right" for="inputMts"><strong>Mts. Cuadrados</strong></label>
								<div class="controls">

									<input type="text" id="mts" name="mts" placeholder="Mts. Cuadrados">

								</div>

							</div>

							<div class="span6">

								<label class="control-label-right" for="inputAlicuota"><strong>Alicuota (%)</strong></label>
								<div class="controls">

									<input type="text" id="alicuota" name="alicuota" placeholder="Alicuota">

								</div>

								<label class="control-label-right" for="inputCodigo"><strong>Condición de Habitabilidad</strong></label>
								<div class="controls">

									<select name="condicion">
										<option value="Habitada">Habitada</option>
										<option value="Abandonada">Abandonada</option>
									</select>

								</div>

							</div>

						</div>

						<div align="center">
							<div class="large-button">
								<button type="submit" class="btn btn-block btn-success">Agregar</button>
							</div>
						</div>

				</div>

			</form>

		</div>

	</div>

</div>


@endsection