<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokeController extends Controller
{
    // Muestra los primeros 12 pokémon
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=12');

        if ($response->failed()) {
            abort(500, 'Error al obtener la lista de Pokémon.');
        }

        $pokemones = $response->json()['results'];

        // Añadimos la imagen de cada pokémon
        foreach ($pokemones as &$pokemon) {
            $detailsResponse = Http::get($pokemon['url']);

            if ($detailsResponse->successful()) {
                $details = $detailsResponse->json();
                $pokemon['imagen'] = $details['sprites']['front_default'] ?? null;
            } else {
                $pokemon['imagen'] = null;
            }
        }

        return view('pokemones.index', compact('pokemones'));
    }

    // Muestra detalles de un pokémon específico por su nombre
    public function show($nombre)
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$nombre}");

        if ($response->failed()) {
            abort(404, 'Pokémon no encontrado');
        }

        $pokemon = $response->json();

        return view('pokemones.show', compact('pokemon'));
    }
}
