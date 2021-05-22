@extends('layouts.base')
@section('title', 'Detalle equipo')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{ asset('images/equipos/' . $equipo->escudo) }}" style="width: 100%">
        </div>
        <div class="col-sm-8">
            <p class="h3">{{ $equipo->nombre }}</p>
            <p class="h5">{{ $equipo->dt }}</p>
            <p class="h5">{{ $equipo->municipio->nombre }}</p>
            <form class="delete d-inline" action="/equipos/{{ $equipo->id }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>                
            </form>
            <a href="/equipos/{{ $equipo->id }}/edit" class="btn btn-warning">Modificar</a>
            <a href="/equipos" class="btn btn-outline-dark">Ver equipos</a>
        </div>
    </div>   
@endsection

