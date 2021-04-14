@extends('layouts.base')
@section('title', 'Torneo')
@section('content')
	<form action="/equipos" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" class="form-control">
		</div>
		<div class="form-group">
			<label for="dt">D.T.</label>
			<input type="text" name="dt" id="dt" class="form-control">
		</div>
		<div class="form-group">
    	<label for="municipio">Municipo</label>
	    <select class="form-control" id="municipio" name="municipio">
            <option value="1">Manizales</option>
            <option value="2">Pereira</option>
            <option value="3">Armenia</option>
        </select>
  	</div>
		<div class="form-group">
			<label for="escudo">Escudo</label>
			<input type="file" name="escudo" id="escudo" class="form-control-file">
		</div>
		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
@endsection
