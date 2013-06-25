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
		          <th>Código</th>
		          <th>Concepto</th>
		          <th>Monto</th>
		          <th>Opciones</th>
		          <th style="width: 36px;"></th>
		        </tr>
		      </thead>

		      <tbody>
		        <tr>
		          <td>0001</td>
		          <td>CONDOMINIO ENERO 2012</td>
		          <td>360,00</td>
		          <td><a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a></td>
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

			<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 id="myModalLabel">Delete Confirmation</h3>
			    </div>
			    
			    <div class="modal-body">
			        <p class="error-text">Are you sure you want to delete the user?</p>
			    </div>
			    
			    <div class="modal-footer">
			        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
			    </div>
			    
			</div>

		</div>

	</div>

</div>


@endsection