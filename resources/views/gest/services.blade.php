@extends('layouts.app')

@section('content')

	<div class="jumbotron jumbotron-fluid mt-5 p-0 max ">
		<div class="">
		</div>
	</div>
	<img src="{{asset('svg/sergi-constance.jpg')}}" class="w-100 image-300 " alt="">

	<div class="container">
		<div class="row justify-content-center mt-3">
			<div class="col-md-6">
				@if (session('message'))
					<div class="alert alert-success" role="alert">
						{{ session('message') }}
					</div>
				@endif
			</div>
		</div>
		<h2 class="my-4">Promociones</h2>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Sauna + Mensualidad</h5>
									<h6 class="card-subtitle mb-2 text-muted">$30</h6>
									<p class="card-text">Obtendra un dia de sauna mas la mensualidad</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Mensualidad</h5>
									<h6 class="card-subtitle mb-2 text-muted">$25</h6>
									<p class="card-text">Entrenador gratuito</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Masaje</h5>
									<h6 class="card-subtitle mb-2 text-muted">$15</h6>
									<p class="card-text">Obtendra un dia de sauna mas la mensualidad</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Bailoterapia</h5>
									<h6 class="card-subtitle mb-2 text-muted">$25</h6>
									<p class="card-text">Sesiones de bailoterapia</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Crosfit</h5>
									<h6 class="card-subtitle mb-2 text-muted">$20</h6>
									<p class="card-text">Entrenamiento de Crosfit</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Sauna + Mensualidad</h5>
									<h6 class="card-subtitle mb-2 text-muted">$25</h6>
									<p class="card-text">Obtendra un dia de sauna mas la mensualidad</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Sauna + Mensualidad</h5>
									<h6 class="card-subtitle mb-2 text-muted">$25</h6>
									<p class="card-text">Obtendra un dia de sauna mas la mensualidad</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Sauna + Mensualidad</h5>
									<h6 class="card-subtitle mb-2 text-muted">$25</h6>
									<p class="card-text">Obtendra un dia de sauna mas la mensualidad</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card bg-dark text-light">
								<div class="card-body">
									<h5 class="card-title">Sauna + Mensualidad</h5>
									<h6 class="card-subtitle mb-2 text-muted">$25</h6>
									<p class="card-text">Obtendra un dia de sauna mas la mensualidad</p>
									<a href="#" class="btn btn-light">Comprar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container py-5">
		<div class="row justify-content-center text-center">
			<div class="my-2 col-md-7 ">
				@foreach($services as $value=>$key)
					<div class="card mt-3">
						<div class="card-header bg-dark text-light">
							{{$key['name']}}
						</div>
						<div class="card-body">
							<div class="row ">
								<div class="col-md-6">
									<h5 class="card-title">${{$key['price']}}</h5>
									<p class="card-text">{{$key['description']}}</p>
									<a href="#" class="btn btn-secondary">Comprar</a>
								</div>
								<div class="col-md-6 ">
									<img class="img-fluid rounded image-cardview" src="svg/cardview-entranamiento.jpg"
									     alt="">
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@stop