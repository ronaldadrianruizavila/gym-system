@extends('layouts.app')
{{--<!--
    Crear otra vista de registro de cliente
 -->--}}
@section('content')
	<div class="container py-5">
		<div class="row justify-content-center pt-4">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header text-center bg-dark text-light">
						<h2 class="card-title">Lista de Servicios</h2>
					</div>
					<div class="card-body">
						<form action="{{route('servicio.index')}}" method="GET">
							<div class="row m-2">
								<div class="col-md-4">
									<select id="estado"
									        class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}"
									        name="estado">
										<option value="A" {{(isset($estado) && $estado=="A")?"selected":null}} >Activo</option>
										<option value="I" {{(isset($estado) && $estado=="I")?"selected":null}}>Inactivo</option>
										<option value="Todo">Todo</option>
									</select>
								</div>
								<div class="col-md-4">
									<button type="submit" class="btn btn-secondary ml-2">Filtrar</button>
								</div>
							</div>
						</form>
						<table class="table table-borderless table-responsive-sm" datatype="">
							<thead>
							<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Precio</th>
								<th scope="col">Promocion</th>
								<th scope="col">Estado</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar</th>
							</tr>
							</thead>
							<tbody>
							@foreach($services as $value)
								<tr>
									<td>{{$value->name}}</td>
									<td>${{$value->price}}</td>
									<td>{{(($value->promocion==1)?"SI":"NO")}}</td>
									<td>{{$value->estado}}</td>
									<td>
										<a class="btn btn-secondary"
										   href="{{route('servicio.edit',$value)}}">Editar</a>
									</td>
									<td>
										@include('actions.services')
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
						{{$services->appends(['estado'=>$estado])->links()}}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop