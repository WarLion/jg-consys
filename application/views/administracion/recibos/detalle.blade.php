@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
			    <a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>
			    <!--<a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>-->
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

			<div class="row-fluid">

				<p><strong>Datos</strong></p> 

				<hr class="bs-docs-separator">

				<div>

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
									<td>9126116</td>
						        </tr>			        
						      </thead>

						      <thead>
						        <tr>
									<td><strong>Propietario</strong></td>
									<td>JULIA DUQUE</td>
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
									<td>23/06/2013</td>								
						        </tr>
						      </thead>

						      <thead>
						        <tr>
						        	<td><strong>Monto</strong></td>
						        	<td>120,00</td>
						        </tr>			        
						      </thead>

						      <thead>
						        <tr>
						        	<td><strong>Tipo</strong></td>
						        	<td>Efectivo</td>
						        </tr>			        
						      </thead>

						    </table>

					    </div>		    

					</div>

				</div>

			</div>

			</form>

			<div class="row-fluid">		

				<div class="span6">

					<strong>Conceptos</strong>

					<hr class="bs-docs-separator">

					<div class="well">

					    <table class="table table-hover">

					      <thead>
					        <tr>
					          <th>Descripción</th>
					          <th>Monto</th>
					        </tr>
					      </thead>

					      <tbody>
					        <tr>
					          <td>CONDOMINIO ENERO 2012</td>
					          <td>120,00</td>
					        </tr>			        
					      </tbody>

					    </table>

					</div>

				</div>

			</div>

			<a href="{{ URL::to('admin/recibos/generar/3'); }}" class="btn btn-success">Imprimir <i class="icon-print icon-white"></i></a>
			<a href="{{ URL::to('admin/recibos/generar/3'); }}" class="btn btn-danger">Anular <i class="icon-remove-sign icon-white"></i></a>

		</div>

		</form>

	</div>

</div>


@endsection