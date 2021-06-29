@extends('layouts.temp')
@section('contenido')
<h1>Formulario de Perros</h1>

<p> 
    <a href="{{ route('perro.index')}}">Listado de Perros</a>
</p>

@if(isset(($perro)))
<form action="{{ route('perro.update', $perro) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
@else
<form action="{{ route('perro.store') }}" method="POST" enctype="multipart/form-data">
@endif

    @csrf
    
    <label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre" id="Nombre" value="{{ $perro->Nombre ?? '' }}">
    <br>
    <label for="FechaIngreso"> Fecha Ingreso </label>
    <input type="text" name="FechaIngreso" id="FechaIngreso" value="{{ $perro->FechaIngreso ?? '' }}">
    <br>
    <label for="Raza"> Raza </label>
    <input type="text" name="Raza" id="Raza" value="{{ $perro->Raza ?? '' }}">
    <br>
    <label for="Edad"> Edad </label>
    <input type="text" name="Edad" id="Edad" value="{{ $perro->Edad ?? '' }}">
    <br>
    <label for="Refugio"> Refugio </label>
    <input type="text" name="Refugio" id="Refugio" value="{{ $perro->Refugio ?? '' }}">
    <br>
    <label for="Foto"> Foto </label>
    <input type="file" name="Foto" id="Foto" value="{{ $perro->Foto ?? '' }}">
    <br>

    <input type="submit" value="Guardar">
    <br>

</form>
@endsection