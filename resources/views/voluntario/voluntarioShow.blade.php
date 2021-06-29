@extends('layouts.temp')
@section('contenido')
    <h1>Detalles del Voluntario</h1>

    <p> 
        <a href="{{ route('voluntario.index')}}">Listado de Voluntario</a>
    </p>
    <table border="1">
        <thead>
            <tr>
            <td>ID</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Fecha de Nacimiento</td>
                <td>Id Refugio</td>
                <td>Foto</td>
            </tr>
        </thead>
        <tbody>
                <tr>
                <td>{{ $voluntario->id }}</td>
                    <td>{{ $voluntario->Nombre }}</td>
                    <td>{{ $voluntario->Apellidos }}</td>
                    <td>{{ $voluntario->FechaNacimiento }}</td>
                    <td>{{ $voluntario->IdRefugio }}</td>
                    <td>{{ $voluntario->Foto }}</td>
                    
                </tr>
        </tbody>
    </table>

    <form action="{{ route('voluntario.destroy', $voluntario) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Voluntario">
    </form>
@endsection