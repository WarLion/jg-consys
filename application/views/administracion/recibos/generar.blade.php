@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
			    <a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>-->
			    <!--<a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>-->
			    
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/recibos/generar') }}" name="form" method="post" class="form-modules">

				{{ $message }}

				<div class="control-group">

					<label class="control-label" for="inputParcela"><strong>Parcela</strong></label>
					<div class="controls">

						<input type="text" id="inputParcela" name="parcela" placeholder="Parcela">
						<button type="submit" class="btn btn-primary" name="buscar" >Buscar</button>

					</div>

				</div>

			</form>

			<hr class="bs-docs-separator">

			<form action="{{ URL::to('admin/recibos/generar/2') }}" name="form2" method="post" class="form-modules">

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
						        @if(!empty($propietario))
					        		@foreach($propietario as $prop)
						        	<tr>
										<td>{{ $parcela }} <input type="hidden" name="hparcela" value="{{ $parcela }}"></td>
										<td>{{ $ci = $prop->propietarios_ci }} <input type="hidden" name="hci" value="{{ $prop->propietarios_ci }}"></td>
										<td>{{ $name = $prop->nombre }} <input type="hidden" name="hnombre" value="{{ $prop->nombre }}"></td>
									</tr>
									@endforeach
								@else
						        	<tr>
										<td>---</td>
										<td>---</td>
										<td>---</td>
									</tr>
								@endif	        
						      </tbody>

						    </table>

					    </div>

					</div>

				</div>

				<div>&nbsp;</div>

				<strong>Detalle</strong>

				<hr class="bs-docs-separator">

			    <table class="table table-hover">

			      <thead>
			        <tr>
			          <th>Código</th>
			          <th>Concepto</th>
			          <th>Fecha</th>
			          <th>Monto</th>
			          <th>Opciones</th>
			        </tr>
			      </thead>

					<tbody>
						@if(!empty($ctasxcobrar))
							@foreach($ctasxcobrar as $cxc)
							<?php $x++ ?>
							<tr>
								<td>{{ $cxc->concepto_codigo }}</td>
								<td>{{ $cxc->nombre }}</td>
								<td>{{ $cxc->fecha }}</td>
								<td>{{ $cxc->monto.',00' }}</td>
								<td><input type="checkbox" name="referencia{{ $x }}" value="{{ $cxc->concepto_codigo }}" onclick="if (this.checked) sumar({{ $cxc->monto }}); else restar({{ $cxc->monto }})" id="selectMontos"></td>
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

				<div>&nbsp;</div>

				<div class="control-group">
					<label class="control-label" for="inputMonto"><strong>Total monto</strong></label>
					<div class="controls">
						<input type="text" id="monto" name="monto" value="0" class="input-small" readonly>
					</div>
				</div>

				<div>&nbsp;</div>

				<button type="submit" class="btn btn-primary">Continuar <i class="icon-circle-arrow-right icon-white"></i></button>

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
		document.form2.monto.value = monto+',00';
	}

	function restar(valor) {
		monto -= valor;
		document.form2.monto.value = monto+',00';
	}
</script>

@endsection