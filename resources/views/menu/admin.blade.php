
@if (Auth::check() && Auth::user()->tipo == 1)
<a class="dropdown-item"
   href="{{ route('servicio.create') }}">{{ __('registroServicio') }}</a>
<a class="dropdown-item"
   href="{{ route('servicio.index') }}">{{ __('Listado Servicio') }}</a>
<a class="dropdown-item"
   href="{{ route('registro.create') }}">{{ __('Crear Usuario') }}</a>
@endif