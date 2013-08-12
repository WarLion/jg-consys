@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxpagar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxpagar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/ctasxpagar/documento'); }}" class="btn"><i class="icon-file"></i> Tipos de Documento</a>-->
			    <a href="{{ URL::to('admin/ctasxpagar/pagos'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Pagos</a></a>
			    
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/ctasxpagar/documento') }}" method="post" class="form-modules">

				{{ $message }}

				<div class="control-group">

					<label class="control-label" for="inputProveedor"><strong>Tipos de Documento</strong></label>
					<div class="controls">

						<input type="text" id="documento" name="documento" placeholder="Documento">
						<button type="submit" class="btn btn-success">Agregar</button>

					</div>

				</div>

				<hr>

				<strong>Documentos</strong>

				<hr class="bs-docs-separator">

				<div class="row-fluid">	

					<div class="span6">

						<div class="well">

						    <table class="table table-hover">

						      <thead>
						        <tr>
						          <th>#</th>
						          <th>Descripción</th>
						          <th>Opciones</th>
						          <th style="width: 36px;"></th>
						        </tr>
						      </thead>

						      <tbody>
						    	@if(!empty($documento))
						        	@foreach($documento as $doc)
						        	<tr>
										<td>{{ $x++ }}</td>
										<td>{{ $doc->descripcion }}</td>
										<td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
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

			</form>

		</div>

	</div>

</div>


@endsection