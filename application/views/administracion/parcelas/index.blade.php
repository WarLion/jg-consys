@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/parcelas/agregar'); }}" class="btn"><i class="icon-plus-sign"></i> Agregar</a>
			    <a href="{{ URL::to('admin/parcelas'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <a href="{{ URL::to('admin/parcelas/calles'); }}" class="btn"><i class="icon-road"></i> Calles</a>
			    
			</div>

			<div>&nbsp;</div>

		    <table class="table table-hover">

		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Parcela</th>
		          <th>Calle</th>
		          <th>Alicuota</th>
		          <th>Metros</th>
		          <th>Condición</th>
		          <th>Opciones</th>
		        </tr>
		      </thead>

		      <tbody>
		        <tr>
		          <td>1</td>
		          <td>36</td>
		          <td>Guiripa</td>
		          <td>012344</td>
		          <td>252,00</td>
		          <td>Habitada</td>
		          <td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-edit"></i></a>  <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
		        </tr>			        
		      </tbody>

		    </table>

		</div>

	</div>

</div>


@endsection