@extends('layouts.base')
@section('title', 'Detalle equipo')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{ $equipo['escudo'] }}">
        </div>
        <div class="col-sm-8">
            <p class="h3">{{ $equipo['nombre'] }}</p>
            <p class="h5">{{ $equipo['dt'] }}</p>
            <p class="h5">{{ $equipo['municipio'] }}</p>
            <a href="#" class="btn btn-danger">Eliminar</a>
            <a href="/equipos/{{ $id }}/edit" class="btn btn-warning">Modificar</a>
            <a href="/equipos" class="btn btn-outline-dark">Ver equipos</a>
        </div>
    </div>   
@endsection

