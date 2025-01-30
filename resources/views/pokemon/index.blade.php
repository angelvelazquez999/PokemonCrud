@extends('layouts.base')
@section('title', 'CRUD')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pokemon.css') }}">
@endpush
@section('content')
<x-app-layout>
    <x-slot name="header">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPokemonModal">
            Crear Pokémon
        </button>
    </x-slot>
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray dark:bg-gray-780 overflow-hidden shadow-xl sm:rounded-lg">

        <section id="table-section">
            <table id="reportsTable" class="">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Región</th>
                        <th>Nivel</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- El contenido se llenará dinámicamente con DataTables -->
                </tbody>
            </table>
        </section>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
    @include('pokemon.modals.crear')
    @include('pokemon.modals.editar')
@endsection
@push('scripts')
    <script src="{{ asset('js/pokemon.js') }}" defer></script>
@endpush
