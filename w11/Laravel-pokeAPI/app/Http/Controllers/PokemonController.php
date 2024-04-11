<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonController extends Controller
{
    public function index() 
    {
        return view('pokemon_form');
    }

    public function getPokemonInfo(Request $request)
    {
        $pokemonName = $request->input('pokemonName');

        $client = new Client();
        // HTTPリクエストを送信するためのクライアント制作
        $response = $client->request('GET', 'https://pokeapi.co/api/v2/pokemon/' . $pokemonName);
        $data = json_decode($response->getBody()->getContents(), true);

        return view('pokemon_info', ['pokemon' => $data]);
    }
                                    
}
