@extends('layouts.app')
@section('content')
	<div class="container">
	<h1>Formulario de contacto</h1>

	@forelse ($errors->all() as $error)
		{{ $error }}
	@empty
		No hay errores
	@endforelse
	<form action="{{ route('contacto') }}" method="POST" accept-charset="utf-8">
		@csrf
		<input type="" name="name" placeholder="Nombre.." value="{{ old('name') }}"> <br>
		<input type="email" name="email"  placeholder="Email..." value="t@t.com"><br>
		<input type="" name="subject" value="Asunto test" placeholder="Asunto..."><br>
		<textarea name="content" placeholder="Comentario...">Comentario test</textarea><br>
		<button type="submit">Enviar</button><br>
	</form>
</div>

<hr><hr>

<div class="panel panel-default">
	<div class="form-group">
		<textarea class="form-inline" name=""></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-danger" type="">Enviar</button>
	</div>
</div>


@endsection
