@layout('layouts/print')

@section('content')

	<script>window.print()</script>

	<div class="row-fluid">

		{{ HTML::image('img/index/logo.png') }}

		<h3 align="center">Recibo de Pago</h3>

		<h4>Datos</h4>
		
		<div>

			<div class="span12">

				<div class="span6">	

						<div class="well">

							<table class="table table-hover">

						      <thead>
						        <tr>
									<td><strong>Parcela</strong></td>
									<td>36</td>
						        </tr>
						      <tbody>

						      <thead>
						        <tr>
									<td><strong>Cédula</strong></td>
									<td>20449123</td>
						        </tr>			        
						      </thead>

						      <thead>
						        <tr>
									<td><strong>Propietario</strong></td>
									<td>DUQUE, JULIA</td>
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
										<td>12/08/2013</td>
									</tr>
								</thead>

								<thead>
									<tr>
										<td><strong>Correlativo</strong></td>
										<td>007</td>
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
						
						<tr>
						  	<td>CONDOMINIO AGOSTO 2013</td>
						  	<td>Bs. 160,00</td>
						</tr>
						
			      	<tbody>
			        <tr>
						<td><div align="center"><strong>Total a pagar</strong></div></td>
						<td colspan="2">Bs. 160,00</td>
			        </tr>			        
			      </tbody>

			    </table>

				

			</div>

		</div>

	</div>

@endsection