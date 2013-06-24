@layout('layouts/login')

@section('content')

<div class="container">

	<div class="row"> 

		<div class="span12">

			<h1>Registro</h1>

		</div>

	</div>

</div>

{{ Form::open('register','POST', array('class' => 'form-horizontal no-margin'))}}

<h3 class="half-margin" id="register-title-center" align>Datos de usuario</h3>

<div class="well">

	<div class="align-center register-form">

		<div class="span5">

			<div class="control-group">

				<label class="control-label" for="user">Usuario</label>

				<div class="controls">

					<input type="text" id="user" name="user" placeholder="Usuario" />

				</div>

			</div>

			<div class="control-group">
			  
				<label class="control-label" for="password">Contraseña</label>

				<div class="controls">

					<input type="password" id="password" name="password" placeholder="Contraseña" />

				</div>

			</div>		    

		</div>

		<div class="span5">

			<div class="control-group">
			  
				<label class="control-label" for="email">Correo electrónico</label>

				<div class="controls">

					<input type="email" id="email" name="email" placeholder="Correo electrónico" />

				</div>

			</div>

			<div class="control-group">
			  
				<label class="control-label" for="repeat_password">Repita contraseña</label>

				<div class="controls">

					<input type="password" id="repeat_password" name="repeat_password" placeholder="Repita contraseña" />

				</div>

			</div>			    

		</div> 

	</div>

</div>

<h3 class="half-margin" id="register-title-center" align>Datos personales</h3>

<div class="well">

	<div class="align-center register-form">

		<div class="span5">

			<div class="control-group">

				<label class="control-label" for="cedula">Cédula</label>

				<div class="controls">

					<input type="text" id="cedula" name="cedula" placeholder="Cédula" />

				</div>

			</div>

			<div class="control-group">
			  
				<label class="control-label" for="number_property">Nro. casa</label>

				<div class="controls">

					<input type="text" id="number_property" name="number_property" placeholder="Nro. casa" />

				</div>

			</div>

			<div class="control-group">
			  
				<label class="control-label" for="phone_property">Tlf. casa</label>

				<div class="controls">

					<input type="text" id="phone_property" name="phone_property" placeholder="Tlf. casa" />

				</div>

			</div>

			<div class="control-group">
			  
				<label class="control-label" for="phone_cell">Tlf. celular</label>

				<div class="controls">

					<input type="text" id="phone_cell" name="phone_cell" placeholder="Tlf. celular" />

				</div>

			</div>		    

		</div>

		<div class="span5">

			<div class="control-group">
			  
				<label class="control-label" for="sex">Sexo</label>

				<div class="controls">

						<label class="radio inline">

						  <input type="radio" name="sex" id="1" value="1" checked>
						  Femenino

						</label>

						<label class="radio inline">

						  <input type="radio" name="sex" id="2" value="2">
						  Masculino

						</label>

				</div>

			</div>

			<div class="control-group">
			  
				<label class="control-label" for="birth">Fecha de nacimiento</label>

				<div class="controls">

					<select name="day" id="day" class="span1">

						<option>Día</option>

						@for($x=1; $x <= 31; $x++)
							<option>{{ $x; }}</option>
						@endfor

					</select>

					<select name="month" id="month" class="span1">

						<option>Mes</option>

						@for($x=1; $x <= 12; $x++)
							<option>{{ $x; }}</option>
						@endfor

					</select>

					<select name="year" id="year" class="span1">

						<option>Año</option>

						@for($x=1925; $x <= 2005; $x++)
							<option>{{ $x; }}</option>
						@endfor

					</select>					

				</div>

			</div>

			<div class="control-group">
			  
				<label class="control-label" for="birthplace">Lugar de nacimiento</label>

				<div class="controls">
					
					<select name="place" id="place">

							<option>Aragua</option>
							<option>Amazonas</option>
							<option>Apure</option>
							<option>Anzoategui</option>

					</select>

				</div>

			</div>	

		</div> 

	</div>

</div>

<div class="align-center register-btn-primary">

	<div class="control-group">
	  
		<div class="controls">

		<button type="submit" name="" class="btn btn-primary">Registrarse</button>

		</div>

	</div>

</div>

{{ Form::close(); }}

@endsection