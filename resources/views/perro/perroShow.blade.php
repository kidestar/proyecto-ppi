@extends('layouts.temp')
@section('contenido')
    <h1>Detalles del Perro</h1>

    <p> 
        <a href="{{ route('perro.index')}}">Listado de Perros</a>
    </p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Fecha Ingreso</td>
                <td>Raza</td>
                <td>Edad</td>
                <td>Refugio</td>
                <td>Foto</td>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $perro->id }}</td>
                    <td>{{ $perro->Nombre }}</td>
                    <td>{{ $perro->FechaIngreso }}</td>
                    <td>{{ $perro->Raza }}</td>
                    <td>{{ $perro->Edad }}</td>
                    <td>{{ $perro->Refugio }}</td>
                    <td>{{ $perro->Foto }}</td>
                </tr>
        </tbody>
    </table>

    <form action="{{ route('perro.destroy', $perro) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Perro">
    </form>
@endsection