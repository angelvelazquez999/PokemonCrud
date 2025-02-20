<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('students', StudentController::class);
    Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon');
    Route::get('/pokemonShow', [PokemonController::class, 'show'])->name('pokemonShow');
    Route::post('/pokemonCreate', [PokemonController::class, 'store'])->name('pokemonCreate');
    Route::post('/pokemonUpdate/{id}', [PokemonController::class, 'update'])->name('pokemonUpdate');
    Route::delete('/pokemonDelete/{id}', [PokemonController::class, 'destroy'])->name('pokemonDelete');
    Route::get('/getImage/{id}', [PokemonController::class, 'getImage'])->name('getImage');


});
