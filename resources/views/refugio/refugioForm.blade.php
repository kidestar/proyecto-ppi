@extends('layouts.temp')
@section('contenido')
<h1>Formulario de Refugios</h1>

<p> 
    <a href="{{ route('refugio.index')}}">Listado de Refugio</a>
</p>

@if(isset(($refugio)))
<form action="{{ route('refugio.update', $refugio) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
@else
<form action="{{ route('refugio.store') }}" method="POST" enctype="multipart/form-data">
@endif

    @csrf
    
    <label for="Direccion"> Dirección </label>
    <input type="text" name="Direccion" id="Direccion" value="{{ $refugio->Direccion ?? '' }}">
    <br>
    <label for="CantidadPerros"> Cantidad de Perros </label>
    <input type="text" name="CantidadPerros" id="CantidadPerros" value="{{ $refugio->CantidadPerros ?? '' }}">
    <br>

    <input type="submit" value="Guardar">
    <br>

</form>
@endsection