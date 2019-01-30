@extends('layouts.app')

@section('content')
	<div class="container py-5">
		<form action="">
			@csrf
			<div class="card mt-4">
				<div class="card-header bg-dark text-light">
					<div class="card-tile text-center ">Carrito de compras</div>
				</div>
				<div class="card-body">

					<table class="table table-borderless table-responsive-sm">
						<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Item</th>
							<th scope="col">Cantidad</th>
							<th scope="col">Precio</th>
							<th scope="col">Eliminar</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mensualidad</td>
							<td>
								<input class="form-control" min="1" placeholder="1" type="number" style="width: 70px;">
							</td>
							<td>$20</td>
							<td>
								<div class="btn btn-danger">Eliminar</div>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Bailoterapia</td>
							<td>
								<input class="form-control" min="1" placeholder="1" type="number" style="width: 70px;">
							</td>
							<td>$25</td>
							<td>
								<div class="btn btn-danger">Eliminar</div>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row  mt-2">
				<div class="col-md-2 mt-2">
					<div class="btn btn-block btn-secondary">
						Comprar
					</div>
				</div>
				<div class="col-md-3 ml-auto mt-2">
					<div class="card">
						<div class="card-body">
							<p class="card-text"> TOTAL: <strong> $45</strong></p>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@stop