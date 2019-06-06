@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="card">
      <h4 align="center"> Envía un link</h4>
      <form action="/submit" method="post">
        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            Resuelva los siguiente errores.
          </div>
        @endif

        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('title') ? 'has-error' : '' }}">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ old('title') }}" >
          @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('url') ? 'has-error' : '' }}">
          <label for="url">URL</label>
          <input type="text" class="form-control" id="url" name="url" placeholder="url" value="{{ old('url') }}" >
          @if ($errors->has('url'))
            <span class="help-block">{{ $errors->first('url') }}</span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('description') ? 'has-error' : '' }}">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="description" value="{{ old('description') }}" >
          @if ($errors->has('description'))
            <span class="help-block">{{ $errors->first('description') }}</span>
          @endif
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
@endsection
