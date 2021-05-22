@extends('layouts.base')
@section('title', 'Torneo')
@section('content')
	<form action="/equipos/{{ $equipo->id }}" method="post" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control" value="{{ $equipo->nombre }}">
		</div>
		<div class="form-group">
			<label for="dt">D.T.</label>
			<input type="text" name="dt" id="dt" class="form-control" value="{{ $equipo->dt }}">
		</div>
		<div class="form-group">
	    	<label for="municipio">Municipo</label>
		    <select class="form-control" id="municipio" name="municipio">
		    	@foreach($municipios as $municipio)
	            	<option value="{{ $municipio->id }}" @if($municipio->id == $equipo->municipio_id) selected @endif>{{ $municipio->nombre }}</option>
	            @endforeach
	        </select>
  		</div>
		<div class="form-group">
			<label for="escudo">Escudo</label>
			<input type="file" name="escudo" id="escudo" class="form-control-file">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
@endsection


