@extends('layouts.app')

@section('title', 'Nuevo Entrendor')

@section('content')
	<form class="form-group" method="post" action="/entrenador">
		@csrf
		<div class="form-group">
			<input type="text" name="txtnombre" class="form-control" placeholder="Nombre" />
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

@endsection




	

	