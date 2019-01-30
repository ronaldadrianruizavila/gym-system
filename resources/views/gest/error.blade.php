@extends('layouts.app')

@section('content')
	<div class="container my-5">
		<div class="row align-items-center">
			<div class="col-md-6 ">
				<div class="row align-items-center">
					<div class="col-12">
						<div class="card my-sm-2">
							<div class="card-header bg-dark text-light">
								PAGINA NO ENCONTRADA
							</div>
							<div class="card-body">
								<blockquote class="blockquote mb-0">
									<p>La pagina que solicitaste no existe.</p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6"><img class="img-fluid" src="{{asset('svg/error.png')}}" alt=""></div>
		</div>

		@stop
	</div>