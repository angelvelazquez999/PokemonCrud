<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{

    public function index()
    {
        $pokemons = Pokemon::all();
        return response()->json(['data' => $pokemons], 200);

    }

    public function show()
    {
        $pokemons = Pokemon::all();
        return view('pokemon.index', compact('pokemons'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:1|max:100',
            'tipo' => 'required|string|min:1|max:100',
            'region' => 'required|string|min:1|max:100',
            'nivel' => 'required|string|min:1|max:100'
        ]);

        try {
            $pokemon = Pokemon::create($request->all());
            return response()->json(['message' => 'Pokemon creado con éxito', 'pokemon' => $pokemon], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el Pokemon.', 'error' => $e->getMessage()], 500);
        }
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|min:1|max:100',
            'tipo' => 'required|string|min:1|max:100',
            'region' => 'required|string|min:1|max:100',
            'nivel' => 'required|string|min:1|max:100'
        ]);

        $pokemon = Pokemon::findOrFail($id);

        $pokemon->update($request->all());

        return response()->json(['message' => 'Pokemon actualizado con éxito'], 200);


    }

    public function destroy(string $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
    }
}
