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
        <!-- Botón de información adicional -->
        <button type="button" class="btn btn-info ms-2" data-bs-toggle="modal" data-bs-target="#infoModal">
            Información Adicional
        </button>
    </x-slot>
    <section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray dark:bg-gray-780 overflow-hidden shadow-xl sm:rounded-lg">

                    <!-- Sección de información adicional -->
                    <div class="p-4 bg-blue-100 dark:bg-blue-900 mb-4">
                        <h3 class="text-lg font-semibold">¡Bienvenido al CRUD de Pokémon!</h3>
                        <p class="mt-2">Aquí puedes gestionar tu lista de Pokémon, crear nuevos, editar los existentes y ver detalles adicionales.</p>
                        <button type="button" class="btn btn-secondary mt-2">Ver Tutorial</button>
                    </div>

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

<!-- Modal de Información Adicional -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Información Adicional</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Este es un sistema de gestión de Pokémon. Puedes agregar, editar y eliminar Pokémon de tu lista.</p>
                <p>¡Explora las funcionalidades y disfruta de la experiencia!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@include('pokemon.modals.crear')
@include('pokemon.modals.editar')
@include('pokemon.modals.imagen')
@endsection
@push('scripts')
    <script src="{{ asset('js/pokemon.js') }}" defer></script>
@endpush