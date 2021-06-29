@extends('layouts.temp')
@section('contenido')
<h1>Formulario de Voluntarios</h1>

<p> 
    <a href="{{ route('voluntario.index')}}">Listado de Voluntario</a>
</p>

@if(isset(($voluntario)))
<form action="{{ route('voluntario.update', $voluntario) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
@else
<form action="{{ route('voluntario.store') }}" method="POST" enctype="multipart/form-data">
@endif

    @csrf
    
    <label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre" id="Nombre" value="{{ $voluntario->Nombre ?? '' }}">
    <br>
    <label for="Apellidos"> Apellidos </label>
    <input type="text" name="Apellidos" id="Apellidos" value="{{ $voluntario->Apellidos ?? '' }}">
    <br>
    <label for="FechaNacimiento"> Fecha de Nacimiento </label>
    <input type="text" name="FechaNacimiento" id="FechaNacimiento" value="{{ $voluntario->FechaNacimiento ?? '' }}">
    <br>
    <label for="IdRefugio"> Id Refugio </label>
    <input type="text" name="IdRefugio" id="IdRefugio" value="{{ $voluntario->IdRefugio ?? '' }}">
    <br>
    <label for="Foto"> Foto </label>
    <input type="file" name="Foto" id="Foto" value="{{ $voluntario->Foto ?? '' }}">
    <br>

    <input type="submit" value="Guardar">
    <br>

</form>
@endsection