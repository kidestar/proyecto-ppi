@extends('layouts.temp')
@section('contenido')
    <h1>Detalles del Refugio</h1>

    <p> 
        <a href="{{ route('refugio.index')}}">Listado de Refugios</a>
    </p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Direccion</td>
                <td>Cantidad de Perros</td>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $refugio->id }}</td>
                    <td>{{ $refugio->Direccion }}</td>
                    <td>{{ $refugio->CantidadPerros }}</td>
                </tr>
        </tbody>
    </table>

    <form action="{{ route('refugio.destroy', $refugio) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar Refugio">
    </form>
@endsection