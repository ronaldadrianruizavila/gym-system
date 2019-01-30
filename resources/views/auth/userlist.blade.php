@extends('layouts.app')

@section('content')
	<div>
		<div class="container py-5">
			<div class="row justify-content-center pt-4">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header text-center bg-dark text-light">
							<h2 class="card-title">Lista de usarios</h2>
						</div>
						<div class="card-body">
                        <!-- Tabla de ver usuarios -->
							<table class="table table-borderless table-responsive-sm">
								<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre</th>
									<th scope="col">Apellido</th>
									<th scope="col">Rol</th>
									<th scope="col">Editar</th>
									<th scope="col">Eliminar</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>Admin</td>
									<td>
										<button class="btn btn-secondary">
											Editar
										</button>
									</td>
									<td>
										<button class="btn btn-secondary">
											Eliminar
										</button>
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>Cliente</td>
									<td>
										<button class="btn btn-secondary">
											Editar
										</button>
									</td>
									<td>
										<button class="btn btn-secondary">
											Eliminar
										</button>
									</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Larry the Bird</td>
									<td>Ozmon</td>
									<td>Admin</td>
									<td>
										<button class="btn btn-secondary">
											Editar
										</button>
									</td>
									<td>
										<button class="btn btn-secondary">
											Eliminar
										</button>
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
@endsection
