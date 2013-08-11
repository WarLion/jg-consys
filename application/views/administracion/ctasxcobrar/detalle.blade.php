@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Cuentas por Cobrar</span> - Detalle</h3> <hr />

			<ul class="nav nav-pills">
				<li class="active"><a href="{{ URL::to('admin/ctasxcobrar/agregar'); }}"><i class="icon-plus-sign"></i> Agregar</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxcobrar'); }}"><i class="icon-eye-open"></i> Ver</a></li>
			</ul>

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="row-fluid">

					<div class="span6">

						<h4>Datos</h4>

						<div class="well">

							<table class="table table-hover">

						      <thead>
						        <tr>
						          <th>Parcela</th>
						          <th>Propietario</th>
						        </tr>
						      </thead>

								<tbody>
								<tr>
									@if($parcela != null && $propietario != null)

										<td>{{ $parcela }}</td>
									
										@foreach($propietario as $ptr)
											<td>
										  		{{ $ptr->nombre }}
											</td>
										@endforeach

									@else
										<td>---</td>
										<td>---</td>
									@endif
								</tr>			        
								</tbody>

						    </table>

					    </div>

					</div>

				</div>

				<h4 align="center">Deudas</h4>

			    <table class="table table-hover">

			      <thead>
			        <tr class="well">
			          <th>Código</th>
			          <th>Concepto</th>
			          <th>Monto</th>
			          <th>Acciones</th>
			        </tr>
			      </thead>

			      <tbody>
			        
			        	@if(!empty($ctasxcobrar))
							@foreach($ctasxcobrar as $cxc)
							<tr>
								<td>
							  		{{ $cxc->concepto_codigo }}
								</td>
								<td>
							  		{{ $cxc->nombre }}
								</td>
								<td>
							  		Bs. {{ $cxc->monto.',00' }}
								</td>
								<td><a href="#myModal" role="button" data-toggle="modal" class="tip" data-toggle="tooltip" data-placement="right" title="Eliminar"><i class="icon-remove"></i></a></td>
							</tr>
							@endforeach
						@else
						<tr>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td><i class="icon-remove"></i></td>
						</tr>
						@endif
			        			        
			      </tbody>

			      <tbody>
			        <tr>
			        	<td></td>
						<td><strong>Total</strong></td>
						<td>
			        	@if(!empty($sum_monto))							
								
					  		Bs. {{ $sum_monto.',00' }}
					  		<td></td>								
						
						@else
						</td>
						<td colspan="2"></td>
						@endif
			        </tr>
			      </tbody>

			    </table>

			</form>

		</div>

	</div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Confirmar eliminar</h3>
    </div>
    
    <div class="modal-body">
        <p class="error-text">¿Desea eliminar esta deuda?</p>
    </div>
    
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button class="btn btn-danger" data-dismiss="modal">Eliminar</button>
    </div>
    
</div>


@endsection

@section('postscript')

<script type="text/javascript">

	$(function() {
		$(".tip").tooltip();
	});

</script>

@endsection