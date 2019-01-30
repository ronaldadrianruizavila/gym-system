@extends('layouts.app')

<!--
    FALTAN BOTONES
    VISTA CON BARRAS
 -->

@section('content')
	<div>
		<div class="container py-5">
			<div class="row justify-content-center pt-4">
				<div class="col-md-8">

                    <!-- Boton de menu desplegable -->
					<div class="dropdown m-2">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Seleccionar Fecha
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Mes</a>
							<a class="dropdown-item" href="#">Dia</a>
							<a class="dropdown-item" href="#">Año</a>
						</div>
					</div>

					<div class="card">
						<div class="card-header text-center bg-dark text-light">
							<h2 class="card-title">Registros de Pagos</h2>
						</div>
						<div class="card-body">
							<table class="table table-borderless table-responsive-sm">
								<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre</th>
									<th scope="col">Apellido</th>
									<th scope="col">Fecha</th>
									<th scope="col">Servicio</th>
									<th scope="col">Valor</th>
									<th scope="col">Eliminar</th>
									<th scope="col">Editar</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>24/12/2018</td>
									<td>Mensualidad</td>
									<td>$ 20</td>
									<td>
										<div class="btn btn-secondary">Editar</div>
									</td>
									<td>
										<div class="btn btn-danger">Editar</div>
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>24/12/2018</td>
									<td>Bailoterapia</td>
									<td>$ 15</td>
									<td>
										<div class="btn btn-secondary">Editar</div>
									</td>
									<td>
										<div class="btn btn-danger">Editar</div>
									</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td >Larry the Bird</td>
									<td >Ozmon</td>
									<td>24/12/2018</td>
									<td>Mensualidad</td>
									<td>$ 20</td>
									<td>
										<div class="btn btn-secondary">Editar</div>
									</td>
									<td>
										<div class="btn btn-danger">Editar</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
