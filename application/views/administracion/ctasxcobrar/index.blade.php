@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">


			<h3 align="left" style="color:#51a351; ">Cuentas por Cobrar</h3>


			<hr />

			<ul class="nav nav-pills">
				<li class="active"><a href="{{ URL::to('admin/ctasxcobrar/agregar'); }}"><i class="icon-plus-sign"></i> Agregar</a></li>
				<li class="active"><a href="{{ URL::to('admin/ctasxcobrar'); }}"><i class="icon-eye-open"></i> Ver</a></li>
			</ul>

			<form action="{{ URL::to('admin/ctasxcobrar/detalle') }}" method="post">

			    <table class="table table-hover">

			      <thead>
			        <tr class="well">
			          <th>#</th>
			          <th>Parcela</th>
			          <th>Propietario</th>
			          <th>Monto</th>
			          <th>Acciones</th>
			        </tr>
			      </thead>

			      <tbody>
			      	@if(!empty($ctasxcobrar))
			        	@foreach($ctasxcobrar as $cxc)
				        	<tr>
								<td>{{ $x++; }}</td>
								<td>{{ $cxc->parcela_nro }}</td>
								<td>{{ $cxc->nombre }}</td>
								<td>Bs. {{ $cxc->monto.',00' }}</td>
								<td>
									{{ HTML::link('admin/ctasxcobrar/detalle?par='.$cxc->parcela_nro,'Detalle') }}
								</td>
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

			</form>

		</div>

	</div>

</div>


@endsection