@extends('layouts.base')
@section('title', 'Crear equipo')
@section('content')
	<form action="/equipos" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control">
			@error('nombre')
				<small>{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
			<label for="dt">D.T.</label>
			<input type="text" name="dt" id="dt" class="form-control">
			@error('dt')
	    		<small>{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
	    	<label for="municipio">Municipo</label>
		    <select class="form-control" id="municipio" name="municipio">
		    	@foreach($municipios as $municipio)
	            	<option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
	            @endforeach
	        </select>
			@error('municipio')
	    		<small>{{ $message }}</small>
			@enderror
  		</div>
		<div class="form-group">
			<label for="escudo">Escudo</label>
			<input type="file" name="escudo" id="escudo" class="form-control-file">
			@error('escudo')
	    		<small>{{ $message }}</small>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
@endsection
