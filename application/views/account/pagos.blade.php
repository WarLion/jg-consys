@layout('layouts/login')

@section('content')

<div class="container">

	<div class="row">

		<div class="text-right" align="right"><a href="" class="btn btn-primary" type="button">Cerrar Sesión</a></div>

		<div class="span12">

			<p class="lead">Reporte de Pagos Realizados</strong></p>

			<h4>Número de villa &nbsp;
				<select class="span1">
					<option>36</option>
				</select>
			</h4>

			<div>&nbsp;</div>

			<h4>Deuda vigente</h4><br />
			<div class="well">

				<table class="table table-hover no-margin">

					<thead>
						<tr>
							<th>Fecha</th>
							<th># Correlativo</th>
							<th>Banco</th>
							<th>Forma de Pago</th>
							<th>Referencia</th>
							<th>Monto</th>
						</tr>
					</thead>

					<tbody>					
						<tr>
							<td>09-01-2013</td>
							<td>2876</td>
							<td>---</td>
							<td>Efectivo</td>
							<td>---</td>
							<td>200,00</td>
						</tr>
						<tr>
							<td>30-01-2013</td>
							<td>3048</td>
							<td>---</td>
							<td>Efectivo</td>
							<td>---</td>
							<td>120,00</td>
						</tr>
						<tr>
							<td>06-03-2013</td>
							<td>3285</td>
							<td>Banco Provincial</td>
							<td>Depósito</td>
							<td>34414883</td>
							<td>120,00</td>
						</tr>
						<tr>
							<td>10-04-2013</td>
							<td>3470</td>
							<td>---</td>
							<td>Efectivo</td>
							<td>---</td>
							<td>160,00</td>
						</tr>
						<tr>
							<td>03-05-2013</td>
							<td>3600</td>
							<td>---</td>
							<td>Efectivo</td>
							<td>---</td>
							<td>200,00</td>
						</tr>
						<tr>
							<td>04-06-2013</td>
							<td>4239</td>
							<td>Banco Provincial</td>
							<td>Transferencia</td>
							<td>94464264</td>
							<td>400,00</td>
						</tr>
						<tr>
							<td>28-06-2013</td>
							<td>5124</td>
							<td>---</td>
							<td>Efectivo</td>
							<td>---</td>
							<td>160,00</td>
						</tr>
					</tbody>

				</table>

			</div>

			<p>
				<a href="#" class="btn btn-primary">Guardar en PDF</a>
			</p>

		</div>

	</div>

</div>

@endsection