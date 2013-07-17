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
			          <th>Partida</th>
			          <th>Monto</th>
			          <th>Fecha</th>
			          <th>Opciones</th>
			        </tr>
			      </thead>

			      <tbody>
			        @if(!empty($pagos))
			        	@foreach($pagos as $pag)
			        	<tr>
			        		<td>{{ $x++ }}</td>
							<td>{{ $pag->proveedor }} </td>
							<td>{{ $pag->metodopag }} </td>
							<td>{{ $pag->partida }} </td>
							<td>{{ $pag->monto }} </td>
							<td>{{ $pag->fecha }} </td>
							<td>{{ HTML::link('admin/ctasxpagar/pagos/detalle','Detalle') }}</td>
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

			</div>

			</form>

		</div>

	</div>

</div>


@endsection