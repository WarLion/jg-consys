@layout('layouts/login_consys')

@section('content')

<div id="padre">

<div id="hijo">

	<div class="container">

		<div class="row-fluid">

				<div style="width: 500px; margin: 0 auto 0 auto;">

					<div style="width: 350px; margin: 0 auto 0 auto;">{{ HTML::image('img/consys/logo_consys.png') }}</div>

					<div>&nbsp;</div>

					<form class="form-horizontal" action='' method="POST">

						<fieldset>

							<div id="legend">
								<legend class="">Iniciar Sesión</legend>
							</div>

							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Usuario</label>
								<div class="controls">
									<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
								</div>
							</div>

							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Contraseña</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
								</div>
							</div>


							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<a href="{{ URL::to('admin') }}" class="btn btn-success">Entrar</a>
								</div>
							</div>

						</fieldset>

					</form>

				</div>

		</div>

	</div>

</div>

</div>


@endsection