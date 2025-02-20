<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Storage;

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


    public function getImage($id)
{
    $pokemon = Pokemon::findOrFail($id);

    if ($pokemon->imagen && Storage::exists('public/' . $pokemon->imagen)) {
        return response()->file(storage_path('app/public/' . $pokemon->imagen));
    }

    return response()->json(['message' => 'Imagen no encontrada'], 404);
}

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|min:1|max:100',
        'tipo' => 'required|string|min:1|max:100',
        'region' => 'required|string|min:1|max:100',
        'nivel' => 'required|string|min:1|max:100',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    try {
        $data = $request->except('imagen');

        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('pokemones', 'public'); // Guarda en storage/app/public/pokemones
            $data['imagen'] = $imagenPath;
        }

        $pokemon = Pokemon::create($data);

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
