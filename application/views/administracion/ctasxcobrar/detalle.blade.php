@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxcobrar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxcobrar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

			<div class="row-fluid">

				<div class="span6">

					<p><strong>Datos</strong></p> 

					<hr class="bs-docs-separator">

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
								@if($txtParcela != null && $propietario != null)

									<td>{{ $txtParcela }}</td>
								
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

			<strong>Deudas</strong>

			<hr class="bs-docs-separator">			

			<div class="well">

			    <table class="table table-hover">

			      <thead>
			        <tr>
			          <th>Código</th>
			          <th>Concepto</th>
			          <th>Monto</th>
			          <th>Opciones</th>
			          <th style="width: 36px;"></th>
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
							  		{{ $cxc->monto.',00' }}
								</td>
								<td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
							</tr>
							@endforeach
						@else
						<tr>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
						</tr>
						@endif
			        			        
			      </tbody>

			      <tbody>
			        <tr>
			        	<td></td>
						<td><strong>Total</strong></td>
						<td>
			        	@if(!empty($sum_monto))							
								
					  		{{ $sum_monto.',00' }}								
						
						@else
						</td>
						<td colspan="2"></td>
						@endif
			        </tr>
			      </tbody>

			    </table>

			</div>			

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

		</form>

	</div>

</div>


@endsection