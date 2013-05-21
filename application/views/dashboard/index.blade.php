@layout('layouts/login')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p class="lead">Escritorio</p>

			<ul id="portfolio" class="thumbnails">

			  	<li class="span3 cms integration">

					<div class="thumbnail">

						<a href="{{ URL::to('#') }}">{{ HTML::image('img/example-slide-1.jpg') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('#','Datos personales') }}</h3>
							<a class="btn btn-primary" href="#">Ver</a>

						</div>

					</div>

			  	</li>

			  	<li class="span3 cms integration">

					<div class="thumbnail">

						<a href="{{ URL::to('#') }}">{{ HTML::image('img/example-slide-2.jpg') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('#','Estado de cuenta') }}</h3>
							<a class="btn btn-primary" href="#">Ver</a>

						</div>
						
					</div>

			  	</li>

			  	<li class="span3 cms integration">

					<div class="thumbnail">

						<a href="{{ URL::to('#') }}">{{ HTML::image('img/example-slide-3.jpg') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('#','Solicitud de documentos') }}</h3>
							<a class="btn btn-primary" href="#">Ver</a>

						</div>
						
					</div>

			  	</li>

			  	<li class="span3 cms integration">

					<div class="thumbnail">

						<a href="{{ URL::to('#') }}">{{ HTML::image('img/example-slide-4.jpg') }} </a>
					  
						<div class="caption">

							<h3>{{ HTML::link('#','Informar pago de condominio') }}</h3>
							<a class="btn btn-primary" href="#">Ver</a>

						</div>
						
					</div>

			  	</li>

			  	<li class="span3 cms integration">

					<div class="thumbnail">

						<a href="{{ URL::to('#') }}"> {{ HTML::image('img/example-slide-1.jpg') }} </a>
					  
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