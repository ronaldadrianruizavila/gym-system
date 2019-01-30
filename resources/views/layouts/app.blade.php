<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/series-label.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>


	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
	      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<div id="app">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel fixed-top">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img src="{{asset('svg/logo_gym.svg')}}" height="29px" width="29px" alt="">
				{{ config('app.name', 'Laravel') }}
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			        aria-controls="navbarSupportedContent" aria-expanded="false"
			        aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">

				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('servicios-cliente') }}">{{ __('Services') }}</a>
					</li>

					<!-- Authentication Links -->
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
							   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

								@include('menu.admin')

								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST"
								      style="display: none;">
									@csrf
								</form>
							</div>

						</li>
					@endguest

				</ul>
			</div>
		</div>
	</nav>
	<!-- Termina Menu -->

	<!--Contenido de las paginas que va a ser sobreescrito en las demas vistas -->

	<div class=" pt-2">
		@yield('content')
	</div>


	<!-- Pie de pagina -->
	<div class="container text-center">
		<div class="alert alert-danger alert-dismissible fade show fixed-bottom mb-0 promociones" role="alert">
			<strong>Promociones!</strong> Solo por estas fechas 20% de descuento
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>

	<footer class=" bg-dark  footer py-4 text-light">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-6 mt-md-0 mt-3">

					<!-- Content -->
					<h5 class="text-uppercase">Sobre Nosotros</h5>
					<p>Somos una empresa con mas de 5 años en el sector de entranamiento fisico con
						entrenadores capacitados para dicha area con certificaciones de la IFBB</p>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none pb-3">

				<!-- Grid column -->
				<div class="col-md-3 mb-md-0 mb-3">

					<!-- Links -->
					<h5 class="text-uppercase">Redes Sociales</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Facebook</a>
						</li>
						<li>
							<a href="#!">Twitter</a>
						</li>
						<li>
							<a href="#!">Instagram</a>
						</li>
						<li>
							<a href="#!">Pinterest</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-3 mb-md-0 mb-3">

					<!-- Links -->
					<h5 class="text-uppercase">Menus</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Inicio</a>
						</li>
						<li>
							<a href="#!">Acerca de</a>
						</li>
						<li>
							<a href="#!">Iniciar Sesion</a>
						</li>
						<li>
							<a href="#!">Registro</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="#"> OXIGYM</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Start of Async Drift Code -->
	<script>
		"use strict";

		!function () {
			var t = window.driftt = window.drift = window.driftt || [];
			if (!t.init) {
				if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
				t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
						t.factory = function (e) {
							return function () {
								var n = Array.prototype.slice.call(arguments);
								return n.unshift(e), t.push(n), t;
							};
						}, t.methods.forEach(function (e) {
					t[e] = t.factory(e);
				}), t.load = function (t) {
					var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
					o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
					var i = document.getElementsByTagName("script")[0];
					i.parentNode.insertBefore(o, i);
				};
			}
		}();
		drift.SNIPPET_VERSION = '0.3.1';
		drift.load('w8zfzy8z2nfu');
	</script>
	<!-- End of Async Drift Code -->
</div>
</body>
</html>
