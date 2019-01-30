<!-- Herencia del archivo app.blade.php -->
@extends('layouts.app')

<!-- Se sobre escribe en el layout  -->
@section('content')

	<!-- Imagenes  -->
	<div id="carouselExampleSlidesOnly" class="carousel slide pt-5" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="svg/carousel-1.webp" class="d-block w-100 image-300" alt="...">
			</div>
			<div class="carousel-item">
				<img src="svg/carousel-2.jpg" class="d-block w-100 image-300" alt="...">
			</div>
			<div class="carousel-item">
				<img src="svg/carousel-3.jpg" class="d-block w-100 image-300" alt="...">
			</div>
		</div>
	</div>
	<!-- Fin de imagenes -->

	<div class="container my-3">
		<div class="row justify-content-center text-align-center">
			<section class="card-deck">
				<!-- Esto es una tarjeta -->
				<div class="card m-1" style="width: 18rem;min-width: 18rem">
					<img src="svg/cardview-entranamiento.jpg" class="card-img-top image-cardview" alt="...">
					<div class="card-body">
						<h5 class="card-title">Plan Personalizado</h5>
						<p class="card-text">Nuestro gymanasio posee planes personalizados que se adaptan a las
							diferentes edades.</p>
						<a href="" class="btn btn-dark">Ver Planes</a>
					</div>
				</div>
				<!-- Esto es una tarjeta -->
				<div class="card  m-1" style="width: 18rem;min-width: 18rem">
					<img src="svg/cardview-comida.jpg" class="card-img-top image-cardview" alt="...">
					<div class="card-body">
						<h5 class="card-title">Plan Nutricional</h5>
						<p class="card-text">Estamos preparados en tema de nutriciones para lograr un mejor rendimiento
							deportivo.</p>
						<a href="" class="btn btn-dark">Ver Planes</a>
					</div>
				</div>
				<!-- Esto es una tarjeta -->
				<div class="card  m-1" style="width: 18rem;min-width: 18rem">
					<img src="svg/cardview-progreso.jpg" class="card-img-top image-cardview" alt="...">
					<div class="card-body">
						<h5 class="card-title">Registro de Progresos</h5>
						<p class="card-text">LLevamos un registro detallado de nuestros usuarios para maximizar
							resultados y progresar.</p>
						<a href="" class="btn btn-dark">Ver Planes</a>
					</div>
				</div>

			</section>
		</div>
	</div>

	<div class="jumbotron jumbotron bg-dark">
		<div class="container ">
			<!--
				 row es para crear una fila
				 col es para crear columna
				 container es para que los elementos se mantengan centrado
			 -->

			<div class="row justify-content-center">
				<div class="col-lg-6 col-sm-12">
					<div class="row justify-content-center m-sm-2">

						<!-- Etiqueta es al del mapa -->
						<iframe
								src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.18562644223!2d-80.4218312203308!3d-0.6091766481152138!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38bbb72752097677!2sBah%C3%ADa+GYM!5e0!3m2!1ses-419!2sec!4v1545970457143"
								width="400"
								height="300"
								frameborder="0"

								allowfullscreen>
						</iframe>

					</div>
				</div>
				<div class="col-lg-6 col-sm-12 mt-2">
					<div class="row justify-content-center text-center ">
						<div class="card" style="width: 18rem;">
							<div class="card-header font-weight-bold ">
								PROMOCIONES
							</div>
							<ul class="list-group list-group-flush ">
								@foreach($promociones as $promocion)
									<li class="list-group-item">{{$promocion["name"]}} ${{$promocion["price"]}}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Seccion comentarios -->
	<div class="container text-center my-3">
		<h3 class="text-muted font-weight-bold">FEEDBACK:</h3>
	</div>
	<div class="container">
		<div class="card-columns">
			<div class="justify-content-center">
				<!-- Cada comentario esta en una tarjeta -->
				<!-- card es para la clase de tarjeta -->

				<div class="card">
					<blockquote class="blockquote mb-0 card-body text-center">
						<p>Excelente gimnasio, maquinas limpias y buenos entrenadores</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								<cite title="Source Title">Marcos Antonio Solis Rodriguez</cite>
							</small>
						</footer>
					</blockquote>
				</div>
				<div class="card p-3">
					<blockquote class="blockquote mb-0 card-body text-center">
						<p>Buenas rutianas hacen tratabar en muy riguroso y estoy viendo cambios me siento muy feliz</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								<cite title="Source Title">Maria Adriana Rosales Mero</cite>
							</small>
						</footer>
					</blockquote>
				</div>
				<div class="card">
					<blockquote class="blockquote mb-0 card-body ">
						<p>Le faltan agregar mas maquinas y parqueadero lo demas esta perfecto sigan dando las mejores
							rutinas</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								<cite title="Source Title">Yuliana Marcela Sanchez Fernandez</cite>
							</small>
						</footer>
					</blockquote>
				</div>
				<!-- p-3 es para el padding -->
				<div class="card text-center p-3">
					<blockquote class="blockquote mb-0 card-body">
						<p>Muy Feliz</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								<cite title="Source Title">Roberta Yuliana Ruiz Mero</cite>
							</small>
						</footer>
					</blockquote>
				</div>
				<div class="card text-center">
					<blockquote class="blockquote mb-0 card-body ">
						<p>Vendan suplementos alimenticios por favor!!</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								<cite title="Source Title">Ronald Javier Martinez Rosales </cite>
							</small>
						</footer>
					</blockquote>
				</div>

				<div class="card p-3">
					<blockquote class="blockquote mb-0 ">
						<p>Podrian añadir parqueaderos en el gimnasio las calles son muy inseguras</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								<cite title="Source Title">Alexandra Gimena Macias Moreira</cite>
							</small>
						</footer>
					</blockquote>
				</div>
				<div class="card p-3 text-center">
					<blockquote class="blockquote mb-0 ">
						<p>Las clases de bailoterapias son muy buenas deberian aumentar horarios y
							poner fines de semana por favor, aumentar instructores, aumentar metodos de pagos; la
							atencion es muy buena</p>
						<footer class="blockquote-footer">
							<small class="text-muted">
								<cite title="Source Title">Alexandra Gimena Macias Moreira</cite>
							</small>
						</footer>
					</blockquote>
				</div>
			</div>
		</div>
	</div>

	<!-- Termina seccion comentarios -->
	<div class="container text-center my-3">
		<h3 class="text-muted font-weight-bold">RECORRIDO</h3>
	</div>

	<div class="container pb-4">
		<div class="embed-responsive embed-responsive-21by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/4D9n3gSgruw" frameborder="0"
			        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
			        allowfullscreen></iframe>
		</div>
	</div>
@stop
