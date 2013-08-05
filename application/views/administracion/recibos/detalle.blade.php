@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row-fluid">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><span style="font-size:23px;">Detalle -</span> <snap style="color:#51a351; font-size:23px;">Recibos</snap></p> <hr />

			<div>&nbsp;</div>

			<form class="form-modules">

				<h4>Datos</h4>

				<div>

					<div class="span6">	

						<div class="well">

							<table class="table table-hover">

								<thead>
									<tr>
										<td><strong>Parcela</strong></td>
										<td>{{ $detalle->parcela_nro }}</td>
									</tr>
								<tbody>

								<thead>
									<tr>
										<td><strong>Cédula</strong></td>
										<td>{{ $detalle->propietarios_ci }}</td>
									</tr>
								</thead>

								<thead>
									<tr>
										<td><strong>Propietario</strong></td>
										<td>{{ $detalle->nom_prop }}</td>
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
									<td>{{ $detalle->fecha }}</td>								
						        </tr>
						      </thead>

						      <thead>
						        <tr>
						        	<td><strong>Monto</strong></td>
						        	<td>Bs. {{ $detalle->mon_pago }},00</td>
						        </tr>			        
						      </thead>

						      <thead>
						        <tr>
						        	<td><strong>Tipo</strong></td>
						        	<td>{{ $detalle->descripcion }}</td>
						        </tr>			        
						      </thead>

						    </table>

					    </div>		    

					</div>

				</div>

				<div>

					<div class="span12">

						<h4 align="center">Detalle Concepto(s)</h4>

						<table class="table table-hover">

							<thead>
								<tr class="well">
									<th>Descripción</th>
									<th>Monto</th>
								</tr>
							</thead>

							<tbody>
								@foreach($recibo as $rec)
									<tr>
										<td>{{ $rec->nom_conc }}</td>
										<td>Bs. {{ $rec->mon_ctas }},00</td>
									</tr>
									<?php $total = $total + $rec->mon_ctas; ?>
								@endforeach
									<tr>
										<th><div align="center">Total pago</div></th>
										<td>Bs. {{ $total; }},00</td>
									</tr>
							</tbody>

						</table>

					</div>

				</div>

				<a href="{{ URL::to('admin/recibos/print'); }}" class="btn btn-success" target="_blank">Imprimir <i class="icon-print icon-white"></i></a>
				<a href="#myModal" class="btn btn-danger" role="button" data-toggle="modal">Anular <i class="icon-remove-sign icon-white"></i></a>

			</form>

		</div>

	</div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Confirmar anular</h3>
    </div>
    
    <div class="modal-body">
        <p class="error-text">¿Realmente desea anular este recibo?</p>
    </div>
    
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button class="btn btn-danger" data-dismiss="modal">Anular</button>
    </div>
    
</div>

@endsection