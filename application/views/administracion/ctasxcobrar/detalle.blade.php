@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/ctasxcobrar/agregar'); }}" class="btn">Agregar</a>
			    <a href="{{ URL::to('admin/ctasxcobrar'); }}" class="btn">Ver</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Parcela</th>
		          <th>Propietario</th>
		          <th>Monto</th>
		          <th>Opciones</th>
		          <th style="width: 36px;"></th>
		        </tr>
		      </thead>

		      <tbody>
		        <tr>
		          <td>1</td>
		          <td>36</td>
		          <td>JULIA DUQUE</td>
		          <td>360,00</td>
		          <td>{{ HTML::link('administracion/ctasxcobrar/detalle','Detalle') }}</td>
		        </tr>			        
		      </tbody>

		    </table>			

			<div class="pagination">

			    <ul>
			        <li><a href="#">Prev</a></li>
			        <li><a href="#">1</a></li>
			        <li><a href="#">2</a></li>
			        <li><a href="#">3</a></li>
			        <li><a href="#">4</a></li>
			        <li><a href="#">Next</a></li>
			    </ul>

			</div>

		</div>

	</div>

</div>


@endsection