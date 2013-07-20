@layout('layouts/login')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p class="lead">Bienvenido(a) <strong>DUQUE, JULIA</strong></p>

			<ul id="portfolio" class="thumbnails">

			  	<li class="span4">

					<div class="thumbnail"><br />

						<a href="{{ URL::to('#') }}">{{ HTML::image('img/dashboard/user.png') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('#','Datos personales') }}</h3>
							<a class="btn btn-primary" href="#">Ver</a>

						</div>

					</div>

			  	</li>

			  	<li class="span4">

					<div class="thumbnail"><br />

						<a href="{{ URL::to('cuenta') }}">{{ HTML::image('img/dashboard/cuenta.png') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('cuenta','Estado de cuenta') }}</h3>
							<a class="btn btn-primary" href="{{ URL::to('cuenta') }}">Ver</a>

						</div>
						
					</div>

			  	</li>

			  	<li class="span4">

					<div class="thumbnail"><br />

						<a href="{{ URL::to('documentos') }}">{{ HTML::image('img/dashboard/documento.png') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('documentos','Solicitud de documentos') }}</h3>
							<a class="btn btn-primary" href="{{ URL::to('documentos') }}">Ver</a>

						</div>
						
					</div>

			  	</li>

			</ul>

			<ul id="portfolio" class="thumbnails">

			  	<li class="span4">

					<div class="thumbnail"><br />

						<a href="{{ URL::to('informar') }}">{{ HTML::image('img/dashboard/pago.png') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('informar','Informar pago de condominio') }}</h3>
							<a class="btn btn-primary" href="{{ URL::to('informar') }}">Ver</a>

						</div>
						
					</div>

			  	</li>

			  	<li class="span4">

					<div class="thumbnail"><br />

						<a href="{{ URL::to('#') }}">{{ HTML::image('img/dashboard/foro.png') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('#','Foro') }}</h3>
							<a class="btn btn-primary" href="#">Ver</a>

						</div>
						
					</div>

			  	</li>

			</ul>

		</div>

	</div>

</div>

@endsection