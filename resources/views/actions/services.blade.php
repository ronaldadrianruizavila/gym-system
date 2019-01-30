<form action="{{route('servicio.destroy',$value)}}"
      method="POST">
	@method('DELETE')
	@csrf
		{!! Form::button('Eliminar', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
</form>