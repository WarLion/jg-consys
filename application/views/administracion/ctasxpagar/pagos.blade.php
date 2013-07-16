@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxpagar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxpagar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/ctasxpagar/documento'); }}" class="btn"><i class="icon-file"></i> Tipos de Documento</a>-->
			    <a href="{{ URL::to('admin/ctasxpagar/pagos'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Pagos</a>
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">			

			<div class="well">

			    <table class="table table-hover">

			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Proveedor</th>
			          <th>Tipo</th>
			          <th>Monto</th>
			          <th>Fecha</th>
			          <th>Opciones</th>
			          <th style="width: 36px;"></th>
			        </tr>
			      </thead>

			      <tbody>
			        <tr>
			          <td>1</td>
			          <td>Hidrocentro</td>
			          <td>Deposito</td>
			          <td>800,00</td>
			          <td>25/06/2013</td>
			          <td>{{ HTML::link('admin/ctasxpagar/pagos/detalle','Detalle') }}</td>
			        </tr>			        
			      </tbody>

			    </table>

			</div>

			</form>

		</div>

	</div>

</div>


@endsection