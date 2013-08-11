@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Cuentas por Pagar</span> - Pagos</h3> <hr />

			<ul class="nav nav-pills">
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar/agregar'); }}"><i class="icon-plus-sign"></i> Agregar</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar'); }}"><i class="icon-eye-open"></i> Ver</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar/pagos'); }}"><i class="icon-ok-sign"></i> Pagos</li>
			</ul>

			<div>&nbsp;</div>

			<form class="form-modules">

			    <table class="table table-hover">

			      <thead>
			        <tr class="well">
			          <th>#</th>
			          <th>Proveedor</th>
			          <th>Tipo</th>
			          <th>Monto</th>
			          <th>Fecha</th>
			          <th>Acciones</th>
			        </tr>
			      </thead>

			      <tbody>
			        @if(!empty($pagos))
			        	@foreach($pagos as $pag)
			        	<tr>
			        		<td>{{ $x++ }}</td>
							<td>{{ $pag->proveedor }} </td>
							<td>{{ $pag->metodopag }} </td>
							<td>Bs. {{ $pag->monto }} </td>
							<td>{{ $pag->fecha }} </td>
							<td>{{ HTML::link('admin/ctasxpagar/pagos/detalle?id='.$pag->id,'Detalle') }}</td>
						</tr>
						@endforeach
					@else
			        	<tr>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
							<td>---</td>
						</tr>
					@endif		        
			      </tbody>

			    </table>

			</form>

		</div>

	</div>

</div>


@endsection