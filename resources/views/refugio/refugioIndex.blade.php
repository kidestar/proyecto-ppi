@extends('layouts.temp')
@section('contenido')
    <h1>Listado de Refugio</h1>

    <p>
        <a href="{{ route('refugio.create')}}">Agregar Refugio</a>
    </p>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Dirección</td>
                <td>Cantidad de Perros</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($refugios as $refugio)
                <tr>
                    <td>{{ $refugio->id }}</td>
                    <td>
                        <a href="{{ route('refugio.show', $refugio->id) }}">{{ $refugio->Direccion }}</a>
                    </td>
                    <td>{{ $refugio->CantidadPerros }}</td>
                    <td>
                        <a href="{{ route('refugio.edit', $refugio) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection