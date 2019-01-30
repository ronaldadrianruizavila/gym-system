@extends('layouts.app')
{{--<!--
    Crear otra vista de registro de cliente
 -->--}}
@section('content')
	<div class="container py-5">
		<div class="row justify-content-center pt-4">
			{{--<!-- col -->--}}
			<div class="col-md-8">
				<div class="card">
					{{--encabezado de la tarjeta --}}
					<div class="card-header bg-dark text-light text-center">{{ __('Register Servicio') }}</div>
					{{--__() funcion para el idioma
				   cuerpo de la tarjeta --}}
					<div class="card-body">
						{{--Comienza formulario de registro de servicio --}}
						<form method="POST" action="{{route('servicio.update',$servicio)}}">
							@method("PUT")
							@csrf
							{{--<!--nombre -->--}}
							<div class="form-group row">
								<label for="name"
								       class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

								<div class="col-md-6">
									<input id="name" type="text"
									       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
									       name="name" value="{{ $servicio->name }}" autofocus>

									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							{{--<!-- Descripcion -->--}}
							<div class="form-group row">
								<label for="description"
								       class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

								<div class="col-md-6">
									<textarea id="description" type="text"
									          class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
									          name="description" >{{ $servicio->description }}</textarea>

									@if ($errors->has('description'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
									@endif
								</div>
							</div>
							<div class="form-group row">
								<label for="estado"
								       class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

								<div class="col-md-6">
									<select name="estado" id="estado"  class="form-control">
										<option {{(($servicio->estado==='A')?"selected":null)}} value="A">Activo</option>
										<option {{(($servicio->estado==='I')?"selected":null)}}  value="I">Inactivo</option>
									</select>


									@if ($errors->has('description'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="price"
								       class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

								<div class="col-md-6">
									<input id="price" type="number"
									       min="0"
									       class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
									       name="price" value="{{ $servicio->price }}">

									@if ($errors->has('price'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
									@endif
								</div>
							</div>
							<div class="form-group row">
								<label for="promocion"
								       class="col-md-4 col-form-label text-md-right">{{ __('Promocion') }}</label>

								<div class="col-md-6 d-flex align-items-center">
									<input id="promocion" type="checkbox"
									       class="form-check{{ $errors->has('promocion') ? ' is-invalid' : '' }}"
									       name="promocion" {{(($servicio->promocion==1)?"checked":null)}} >

									@if ($errors->has('promocion'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('promocion') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row">
								<label for="image"
								       class="col-md-4 col-form-label text-md-right">{{ __('Images') }}</label>

								<div class="col-md-6">
									<input id="image" type="file"
									       class="form-control-file{{ $errors->has('image') ? ' is-invalid' : '' }}"
									       name="image"  multiple="true">

									@if ($errors->has('image'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-secondary">
										{{ __('Actualizar') }}
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection