{{-- <x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la pagina principal</h1> 
        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Titulo de alerta
            </x-slot>
            Contenido de la llave
        </x-alert2>
        
        <p>Hola mundo</p>
    </div>
</x-app-layout> --}}

@extends('layouts.app')

{{-- @section('title')
    Laravel 12
@endsection --}}

@section('title', 'Laravel 12')

@push('css')
    <style>
        body {
            background-color: #f0f0f0;
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            color: red;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
       {{-- <h1>Bienvenido a la pagina principal</h1> --}}
        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Titulo de alerta
            </x-slot>
            Contenido de la llave
        </x-alert2>

        <p>Hola mundo</p>
    </div>
@endsection
