@layout('layouts/print')

@section('content')

	<script>window.print()</script>

	<div class="row-fluid">

		{{ HTML::image('img/index/logo.png') }}

		<h3 align="center">Recibo de Pago</h3>

		<h4><strong>Datos</strong></h4> 

		<hr class="bs-docs-separator">
		
		<div>

			<div class="span12">

				<div class="span6">

					<table class="table table-hover">

						<thead>
							<tr>
								<td><strong>Parcela</strong></td>
								<td>{{ $recibo_print->parcela_nro }}</td>
							</tr>
						<tbody>

						<thead>
							<tr>
								<td><strong>Cédula</strong></td>
								<td>{{ $recibo_print->propietarios_ci }}</td>
							</tr>
						</thead>

						<thead>
							<tr>
								<td><strong>Propietario</strong></td>
								<td>{{ $recibo_print->nom_prop }}</td>
							</tr>
						</thead>

					</table>

				</div>

				<div class="span6">

					<table class="table table-hover">

				      <thead>
				        <tr>
							<td><strong>Fecha</strong></td>
							<td>{{ $recibo_print->fecha }}</td>
				        </tr>
				      </thead>

				      <thead>
				        <tr>
				        	<td><strong>Monto</strong></td>
				        	<td>Bs. {{ $recibo_print->mon_pago }}</td>
				        </tr>
				      </thead>

				      <thead>
				        <tr>
				        	<td><strong>Tipo</strong></td>
				        	<td>{{ $recibo_print->descripcion }}</td>
				        </tr>
				      </thead>

				    </table>

				</div>

			</div>

		</div>
	
	</div>

	<div class="clearfix">&nbsp;</div>

	<div class="row-fluid">		

		<div class="span12">

			<h4><strong>Concepto(s)</strong></h4>

			<hr class="bs-docs-separator">

			<table class="table table-hover">

				<thead>
					<tr>
						<th>Descripción</th>
						<th>Monto</th>
					</tr>
				</thead>

				<tbody>
					@foreach($rec_conceptos as $rec)
						<tr>
							<td>{{ $rec->nom_conc }}</td>
							<td>Bs. {{ $rec->mon_ctas }}</td>
						</tr>
						<?php $total = $total + $rec->mon_ctas; ?>
					@endforeach
						<tr>
							<th><div align="center">Total a pagar</div></th>
							<td>Bs. {{ $total; }}</td>
						</tr>
				</tbody>

			</table>

		</div>

	</div>

@endsection