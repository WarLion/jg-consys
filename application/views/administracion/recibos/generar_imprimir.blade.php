@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Recibos</span> - Generar Recibo (3/3)</h3> <hr />

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/recibos/generar/3') }}" name="form" method="post" class="form-modules">

			<div class="row-fluid">

				<h4 align="center">Resumen</h4> 

				<hr class="bs-docs-separator">

				<div>

					{{ $message }}

					<div class="span6">	

						<div class="well">

							<table class="table table-hover">

						      <thead>
						        <tr>
									<td><strong>Parcela</strong></td>
									<td>{{ $generarPay['parcela'] }}</td>
						        </tr>
						      <tbody>

						      <thead>
						        <tr>
									<td><strong>Cédula</strong></td>
									<td>{{ $generarPay['ci'] }}</td>
						        </tr>			        
						      </thead>

						      <thead>
						        <tr>
									<td><strong>Propietario</strong></td>
									<td>{{ $generarPay['name'] }}</td>
						        </tr>			        
						      </thead>

						    </table>

						</div>

					</div>

					<div class="span6">

						<div class="well">

							<table class="table table-hover">

								<thead>
									<tr>
										<td><strong>Fecha</strong></td>
										<td>{{ $generarPay['fecha'] }}</td>
									</tr>
								</thead>

								<thead>
									<tr>
										<td><strong>Correlativo</strong></td>
										<td>{{ '00'.$correlativo }}</td>
									</tr>
								</thead>

								<thead>
									<tr>
										<td><strong>Forma de pago</strong></td>
										<td>Efectivo</td>
									</tr>
								</thead>

						    </table>

					    </div>		    

					</div>

				</div>

			</div>

			<div>&nbsp;</div>

			<h4 align="center">Detalle</h4>

			    <table class="table table-hover">

				     <thead>
				        <tr class="well">
				          <th>Concepto</th>
				          <th>Monto</th>
				        </tr>
				     </thead>

					<tbody>
						@for($x=1; $x<=$num_con; $x++)
						<tr>
						  	<td>{{ $nombre_con[$x]['nombre'] }}</td>
						  	<td>Bs. {{ $nombre_con[$x]['monto'].',00' }}</td>
						</tr>
						@endfor
			      	<tbody>
			        <tr>
						<td><div align="center"><strong>Total a pagar</strong></div></td>
						<td colspan="2">Bs. {{ $total_conceptos.',00' }}</td>
			        </tr>			        
			      </tbody>

			    </table>

			<p><strong>A la fecha {{ $fecha }} usted adeuda Bs. {{ $adeuda.',00' }}</strong></p><br>

			<input type="submit" name="procesar" value="Procesar" class="btn btn-success">

			</form>

		</div>

	</div>

</div>


@endsection