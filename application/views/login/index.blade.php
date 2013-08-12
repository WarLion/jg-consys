@layout('layouts/login')

@section('content')

<h3 class="half-margin" id="login-title-center" align>Iniciar sesión</h3>

<div class="well">

	<div class="login-center">

		<form action="#" class="form-horizontal no-margin">

		    <div class="control-group">
				<label class="control-label" for="inputUser">Usuario</label>
				<div class="controls">
					<input type="text" id="inputUser" placeholder="Usuario" />
				</div>
		    </div>

		    <div class="control-group">		      
				<label class="control-label" for="inputPassword">Contraseña</label>		      
				<div class="controls">
					<input type="password" id="inputPassword" placeholder="Contraseña" />
				</div>
		    </div>

		    <div class="control-group">		      
				<div class="controls">
					<a href="{{ URL::to('dashboard') }}" class="btn btn-small">Entrar</a>
				</div>
		    </div>

		    <div class="control-group no-margin">		      
				<div class="controls">
					<p>{{ HTML::link('user/password_recovery','¿Olvidaste tu contraseña?') }}</p>
				</div>
		    </div>		    

		    <div class="control-group no-margin">		      
				<div class="controls">
					<p>{{ HTML::link('register','¿No tiene una cuenta? Regístrate') }}</p>
				</div>
		    </div>		    

		</form>

	</div>

</div>

@endsection