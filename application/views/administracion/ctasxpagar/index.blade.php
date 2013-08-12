@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<h3 align="left"><span style="color:#51a351;">Cuentas por Pagar</span></h3> <hr />

			<ul class="nav nav-pills">
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar/agregar'); }}"><i class="icon-plus-sign"></i> Agregar</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar'); }}"><i class="icon-eye-open"></i> Ver</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxpagar/pagos'); }}"><i class="icon-ok-sign"></i> Pagos</a></li>
			</ul>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr class="well">
		          <th>#</th>
		          <th>Proveedor</th>
		          <th>Monto</th>
		          <th>Acción</th>
		        </tr>
		      </thead>

		      <tbody>
		        @if(!empty($ctasxpagar))
		        	@foreach($ctasxpagar as $cxp)
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $cxp->descripcion }}</td>
							<td>Bs. {{ $cxp->monto.',00' }}</td>
							<td>{{ HTML::link('admin/ctasxpagar/pagos/registro?rif='.$cxp->nro,'Pagar') }}</td>
						</tr>
					@endforeach
				@else
		        	<tr>
						<td>---</td>
						<td>---</td>
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


@endsection