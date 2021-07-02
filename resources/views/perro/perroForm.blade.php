@extends('layouts.windmill')
@section('contenido')

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Formulario de perros
</h2>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

    @if ($errors->any())
        <div class="min-w-0 p-4 text-white bg-red-600 rounded-lg shadow-xs">
            <h4 class="mb-4 font-semibold">
                Verifique los campos del formulario
            </h4>
            <p>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </p>
        </div>
    @endif

    @if(isset(($perro)))
    <form action="{{ route('perro.update', $perro) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @else
        <form action="{{ route('perro.store') }}" method="POST" enctype="multipart/form-data">
            @endif

            @csrf

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nombre del Perro: </span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="Nombre" id="Nombre" value="{{ old('Nombre') ?? $perro->Nombre ?? ''}}" />
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Fecha Ingreso: </span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="FechaIngreso" id="FechaIngreso" value="{{ old('FechaIngreso') ?? $perro->FechaIngreso ?? ''}}" />
            </label>


            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Raza: </span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="Raza" id="Raza" value="{{ old('Raza') ?? $perro->Raza ?? ''}}" />
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Edad: </span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="Edad" id="Edad" value="{{ old('Edad') ?? $perro->Edad ?? ''}}" />
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">ID Refugio: </span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="text" name="refugio_id" id="refugio_id" value="{{ old('refugio_id') ?? $perro->refugio_id ?? ''}}" />
            </label>

            <!--         <div class="mt-4">
            <input class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit"
                value="Guardar">
            <svg class="w-6 h-6 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
            </input>
        </div> -->

            <div class="mt-4">
                <input
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    type="submit" value="Guardar">
                </input>
            </div>
        </form>
</div>

<!--     <p>
        <a href="{{ route('perro.index')}}">Listado de Perros</a>
    </p> -->
</form>
@endsection