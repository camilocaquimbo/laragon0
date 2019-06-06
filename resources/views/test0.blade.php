@extends('layouts.app')
<div class="container">
	<h1>Formulario de contacto</h1>
	<form action="{{ route('contacto') }}" method="POST" accept-charset="utf-8">
		@csrf
		<input type="" name="name" value="" placeholder="Nombre.."><br>
		<input type="email" name="" value="email" placeholder="Email..."><br>
		<input type="" name="subject" value="" placeholder="Asunto..."><br>
		<textarea name="content" placeholder="Comentario..."></textarea><br>
		<button type="submit">Enviar</button><br>
	</form>
</div>

<hr><hr>

<pre>
	{{ dump(request()->path())  }}
</pre>

<hr><hr>

<pre>
	{{ dump(request()->url())  }}
</pre>

<hr><hr>
<pre>
	{{ dump(request())->url()  }}
</pre>

<hr><hr>

<pre>
	{{ dump(request()) }}
</pre>

<hr><hr>

<pre>
	{{ request() }}
</pre>

<hr><hr>

@forelse ($elem as $element)
	{{-- expr --}}
	<h1>{{ $element['elem1'] }}</h1>
	<hr>
	{{ $loop->last ? 'Es el último' : 'No es el último' }}
@empty
	{{-- empty expr --}}
	<h2>No hay datos</h2>
@endforelse