@extends('layouts.windmill')
@section('contenido')


<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
   Detalles del Voluntario
</h2>

<p>
    <a href="{{ route('voluntario.index')}}">Listado de Voluntario</a>
</p>

<div class="grid gap-6 mb-8 md:grid-cols-2">
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            {{ $voluntario->Nombre }}
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
        <ul>
            <li>ID: {{ $voluntario->id }}</li>
            <li>Nombre: {{ $voluntario->Nombre }}</li>
            <li>Apellidos: {{ $voluntario->Apellidos }}</li>
            <li>Fecha de Nacimiento: {{ $voluntario->FechaNacimiento }}</li>
        </ul>
        </p>
    </div>
</div>


<form action="{{ route('voluntario.destroy', $voluntario) }}" method="POST">
    @csrf
    @method('DELETE')
    <div>
        <button
            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                </path>
            </svg>

            <!--             <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <path
                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                    clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg> -->
            <span>Eliminar Voluntario</span>
        </button>
    </div>
</form>
@endsection