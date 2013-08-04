@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><snap style="color:#51a351; font-size:23px;">Cuentas por Cobrar</snap></p> <hr />

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxcobrar/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/ctasxcobrar'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    
			</div>

			<div>&nbsp;</div>

			<form action="{{ URL::to('admin/ctasxcobrar/detalle') }}" method="post">

			    <table class="table table-hover">

			      <thead>
			        <tr class="well">
			          <th>#</th>
			          <th>Parcela</th>
			          <th>Propietario</th>
			          <th>Monto</th>
			          <th>Opciones</th>
			          <th style="width: 36px;"></th>
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