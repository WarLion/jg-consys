@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><span style="font-size:23px;">Agregar -</span> <snap style="color:#51a351; font-size:23px;">Parcelas</snap></p> <hr />

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/parcelas/agregar') }}" method="post" class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						{{ $message; }}

						<div class="well"> 

							<div class="control-group">

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

						<button type="submit" class="btn btn-success">Agregar</button>

					</div>

				</div>

			</form>

		</div>

	</div>

</div>


@endsection