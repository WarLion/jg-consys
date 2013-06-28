@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/parcelas/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/parcelas'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/parcelas/calles'); }}" class="btn"><i class="icon-road"></i> Calles</a>			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						<div class="well"> 

							<div class="control-group">

								<label class="control-label-right" for="inputParcela"><strong>Nro. Parcela</strong></label>
								<div class="controls">

									<input type="text" id="parcela" name="parcela" placeholder="Nro. Parcela">

								</div>

								<label class="control-label-right" for="inputCodigo"><strong>Calle</strong></label>
								<div class="controls">

									<select>

										<option>Guiripa</option>
										<option>Taiguaiguai</option>

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

									<select>

										<option>Habitada</option>
										<option>Abandonada</option>

									</select>

								</div>

							</div>

						</div>

						<button type="submit" class="btn btn-primary">Agregar</button>

					</div>

				</div>

			</form>

		</div>

	</div>

</div>


@endsection