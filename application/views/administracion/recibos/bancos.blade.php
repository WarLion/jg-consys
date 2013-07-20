@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><span style="font-size:23px;">Bancos -</span> <snap style="color:#51a351; font-size:23px;">Recibos</snap></p> <hr />

			<div class="btn-toolbar">

				<a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
				<a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
				<a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>
				<a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>
				
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

				<div class="control-group">

					<label class="control-label" for="inputBanco"><strong>Banco</strong></label>
					<div class="controls">

						<input type="text" id="banco" name="banco" placeholder="Banco">
						<button type="submit" class="btn btn-success">Agregar</button>

					</div>

				</div>

				<hr>

				<strong>Bancos</strong>

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
								<tr>
								  <td>1</td>
								  <td>Banco de Venezuela</td>
								  <td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-edit"></i></a>  <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
								</tr>                   
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