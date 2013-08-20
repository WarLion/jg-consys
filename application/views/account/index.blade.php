@layout('layouts/login')

@section('content')

<div class="container">

	<div class="row">

		<div class="text-right" align="right"><a href="{{ URL::to('login') }}" class="btn btn-primary" type="button">Cerrar Sesión</a></div>

		<div class="span12">

			<p class="lead">Estado de Cuenta</strong></p>

			<h4>Número de villa &nbsp;
				<select class="span1">
					<option>36</option>
				</select>
			</h4>

			<div>&nbsp;</div>

			<h4 align="center">Detalle de la Deuda</h4><br />
			<div class="well">
				<table class="table table-hover no-margin">
					<thead>
						<tr>
							<th>Concepto</th>
							<th>Monto</th>
							<th>Opciones</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<th colspan="3">Cuota Ordinaria</th>
						</tr>
						<tr>
							<td><span style="margin-left:20px"></span>Condominio</td>
							<td>420,00</td>
							<td><a href="#">Detalle</a></td>
						</tr>

						<tr>
							<th colspan="3">Cuota(s) Extraordinaria(s)</th>
						</tr>
						<tr>
							<td><span style="margin-left:20px"></span>Proyecto Sistema de Seguridad 2008</td>
							<td>80,00</td>
							<td><a href="#">Detalle</a></td>
						</tr>
						<tr>
							<td><span style="margin-left:20px"></span>Proyecto de Mejoras 2010</td>
							<td>50,00</td>
							<td><a href="#">Detalle</a></td>
						</tr>
						<tr>
							<td><span style="margin-left:20px"></span>Actualización de Doc. Constitutivo 2011</td>
							<td>120,00</td>
							<td><a href="#">Detalle</a></td>
						</tr>

						<tr>
							<th>Otro(s)</th>
							<td>0,00</td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td>Sub-Total Deuda</td>
							<td>670,00</td>
							<td></td>
						</tr>
						<tr>
							<td>Cheque Devuelto</td>
							<td>0,00</td>
							<td></td>
						</tr>
						<tr>
							<td>Reintegros</td>
							<td>0,00</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="well">
				<table class="table table-hover no-margin">
					<thead>
						<tr>
							<th width="702">Total a pagar (Bs)</th>
							<th>670,00</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</div>

			<p>
				<a href="#" class="btn btn-primary">Guardar en PDF</a>
				<a href="{{ URL::to('cuenta/pagos') }}" class="btn btn-primary">Ver Reporte de Pagos</a>
			</p>

		</div>

	</div>

</div>

@endsection