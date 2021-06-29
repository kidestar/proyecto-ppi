@extends('layouts.temp')
@section('contenido')
    <h1>Listado de Voluntario</h1>

    <p>
        <a href="{{ route('voluntario.create')}}">Agregar Voluntario</a>
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
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($voluntarios as $voluntario)
                <tr>
                    <td>{{ $voluntario->id }}</td>
                    <td>
                        <a href="{{ route('voluntario.show', $voluntario->id) }}">{{ $voluntario->Nombre }}</a>
                    </td>
                    <td>{{ $voluntario->Apellidos }}</td>
                    <td>{{ $voluntario->FechaNacimiento }}</td>
                    <td>{{ $voluntario->IdRefugio }}</td>
                    <td>{{ $voluntario->Foto }}</td>
                    <td>
                        <a href="{{ route('voluntario.edit', $voluntario) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection