@layout('layouts/default')

@section('content')

<div class="container">

		<!-- Slider -->
		<div class="slides">

			<div><a href="#">{{ HTML::image('img/slide1.jpg') }}</a>
				
				<div class="detail">

					<h3><a href="#">Cyril Hahn</a></h3>
					<em>April 20th, 2013</em>          
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> <a href="#" class="view">...continue reading</a></p>
					<a class="btn" href="#">View</a></div>
		 
			</div>

			<div><a href="#">{{ HTML::image('img/slide2.jpg') }}</a>
				
				<div class="detail">
					
					<h3><a href="#">RA Loves Lea Peckre</a></h3>
					<em>April 20th, 2013</em>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> <a href="#" class="view">...continue reading</a></p>
					<a class="btn" href="#">View</a>

				</div>
			
			</div>
			
			<div><a href="#">{{ HTML::image('img/slide3.jpg') }}</a>
				
				<div class="detail">
					
					<h3><a href="#">The Box Boutique’s New Shoe Classic</a></h3>
					<em>April 20th, 2013</em>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> <a href="#" class="view">...continue reading</a></p>
					<a class="btn" href="#">View</a>

				</div>
		 
			</div>
			
			<div><a href="#">{{ HTML::image('img/slide4.jpg') }}</a>
				
				<div class="detail">
					
					<h3><a href="#">Craig-Lawrence</a></h3>
					<em>April 20th, 2013</em>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong> <a href="#" class="view">...continue reading</a></p>
					<a class="btn" href="#">View</a>

				</div>
			
			</div>

		</div>

	</div>

</div>

<div class="section">

  <div class="container">

		<!-- Latest Works -->
		<div class="row">

			<div class="span12">

				<hr />

				<!-- Services List -->
				<ul class="thumbnails">

				  <li class="span3">

				    <div class="text-center"><img src="img/ico-forum.png" /><br />
				      <a href="#" class="btn half-margin">Foro</a>
				      <p class="caption">Ingresa al foro de la comunidad, y participa en temas y encuestas.</p>
				    </div>

				  </li>

				  <li class="span3">

				    <div class="text-center"><img src="img/ico-publicity.png" /><br />

				      <a href="#" class="btn half-margin">Publicidad</a>
				      <p class="caption">Vecino ¿Te gustaría publicar algún servicio que ofreces? entra e informate como puedes hacerlo a través de nuestra página de publicidad.</p>
				    
				    </div>

				  </li>

				  <li class="span3">

				    <div class="text-center"><img src="img/ico-vig-big.png" /><br />
				      
				      <a href="#" class="btn half-margin">Sugerencias</a>
				      <p class="caption">Para nosotros, tu opinión es importante.</p>
				    
				    </div>

				  </li>

				  <li class="span3">

				    <div class="text-center"><img src="img/ico-contact.png" /><br />

				      <a href="#" class="btn half-margin">Contacto</a>
				      <p class="caption">Si desea saber más información o quiere comunicarse con nosotros, diríjase a nuestro formulario de contacto que con gusto le estaremos repondiendo a la brevedad posible.</p>
				    
				    </div>

				  </li>

				</ul>

			</div>

		</div>

	</div>

</div>

@endsection