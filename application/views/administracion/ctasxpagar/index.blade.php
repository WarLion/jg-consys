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

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Proveedor</th>
		          <th>Monto</th>
		          <th>Estado</th>
		        </tr>
		      </thead>

		      <tbody>
		        @if(!empty($ctasxpagar))
		        	@foreach($ctasxpagar as $cxp)
			        	<tr>
							<td>{{ $x++; }}</td>
							<td>{{ $cxp->descripcion }}</td>
							<td>{{ $cxp->monto.',00' }}</td>
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