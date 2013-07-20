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

			<form action="{{ URL::to('admin/recibos/generar/3') }}" name="form" method="post" class="form-modules">

			<div class="row-fluid">

				<p><strong>Resumen</strong></p> 

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

			<strong>Detalle</strong>

			<hr class="bs-docs-separator">			

			<div class="well">

			    <table class="table table-hover">

				     <thead>
				        <tr>
				          <th>Concepto</th>
				          <th>Monto</th>
				        </tr>
				     </thead>

					<tbody>
						@for($x=1; $x<=$num_con; $x++)
						<tr>
						  	<td><?php echo $nombre_con[$x]['nombre'] ?></td>
						  	<td><?php echo $nombre_con[$x]['monto'].',00' ?></td>
						</tr>
						@endfor
			      	<tbody>
			        <tr>
						<td><strong>Total</strong></td>
						<td colspan="2">{{ $total_conceptos.',00' }}</td>
			        </tr>			        
			      </tbody>

			    </table>

			</div>

			<p><strong>A la fecha {{ $fecha }} usted adeuda Bs. {{ $adeuda.',00' }}</strong></p><br>

			<input type="submit" name="procesar" value="Procesar" class="btn btn-success">

			</form>

		</div>

	</div>

</div>


@endsection