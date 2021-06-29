@extends('layouts.temp')
@section('contenido')
    <h1>Listado de perros</h1>

    <p>
        <a href="{{ route('perro.create')}}">Agregar Perro</a>
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
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($perros as $perro)
                <tr>
                    <td>{{ $perro->id }}</td>
                    <td>
                        <a href="{{ route('perro.show', $perro->id) }}">{{ $perro->Nombre }}</a>
                    </td>
                    <td>{{ $perro->FechaIngreso }}</td>
                    <td>{{ $perro->Raza }}</td>
                    <td>{{ $perro->Edad }}</td>
                    <td>{{ $perro->Refugio }}</td>
                    <td>{{ $perro->Foto }}</td>
                    <td>
                        <a href="{{ route('perro.edit', $perro) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection