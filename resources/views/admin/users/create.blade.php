@extends('layouts.app')

@section('content')
	<div class="container py-5">
		<div class="row justify-content-center pt-4">
			<div class="col-md-8">
				<!-- Formulario de registro  -->
				<div class="card">
					<div class="card-header bg-dark text-light text-center">{{ __('Register') }}</div>

					<div class="card-body">
						<!-- Empieza formulario de registro -->
						<form method="POST" action="{{ route('registro.store') }}">
						@csrf
						<!-- Campo nombre -->
							<div class="form-group row">
								<label for="name"
								       class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

								<div class="col-md-6">
									<input id="name" type="text"
									       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
									       name="name" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
									@endif
								</div>
							</div>
							<!-- Campo apellido -->
							<div class="form-group row">
								<label for="apellido"
								       class="col-md-4 col-form-label text-md-right">{{ __('SurName') }}</label>

								<div class="col-md-6">
									<input id="surname" type="text"
									       class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
									       name="surname" value="{{ old('surname') }}" required>

									@if ($errors->has('surname'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
									@endif
								</div>
							</div>
							<!-- Campo cedula -->
							<div class="form-group row">
								<label for="cedula"
								       class="col-md-4 col-form-label text-md-right">{{ __('Identification') }}</label>

								<div class="col-md-6">
									<input id="cedula" type="number"
									       class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}"
									       name="cedula" value="{{ old('cedula') }}" required>

									@if ($errors->has('cedula'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
									@endif
								</div>
							</div>
							<!-- Campo email -->
							<div class="form-group row">
								<label for="email"
								       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

								<div class="col-md-6">
									<input id="email" type="email"
									       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
									       name="email" value="{{ old('email') }}" required>

									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<!-- Campo elegir tipo de usuario -->
							<div class="form-group row">
								<label for="fold"
								       class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

								<div class="col-md-6">
									<select id="role"
									        class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}"
									        name="role" value="{{ old('role') }}">
										@foreach($roles as $id=>$name)
											<option value="{{$id}}" >{{$name}}</option>
										@endforeach
									</select>

									@if ($errors->has('role'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
									@endif
								</div>
							</div>
							<div class="form-group row">
								<label for="image"
								       class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

								<div class="col-md-6">
									<input id="image" type="file"
									       class="form-control-file{{ $errors->has('image') ? ' is-invalid' : '' }}"
									       name="image" value="{{ old('image') }}" >

									@if ($errors->has('image'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
									@endif
								</div>
							</div>
							<!-- Contraseña -->
							<div class="form-group row">
								<label for="password"
								       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password"
									       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
									       name="password" required>

									@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<!-- Confirmar contraseña -->
							<div class="form-group row">
								<label for="password-confirm"
								       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control"
									       name="password_confirmation" required>
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-secondary">
										{{ __('Register') }}
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
