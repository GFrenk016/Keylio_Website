<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GeneralController extends Controller
{
    public function homepage()
    {
        $games = Game::all();

        return view('welcome', compact('games'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $selectedStore = $request->input('store');

        $selectedKey_store = $request->input('key_store');

        $selectedGenre = $request->input('genre');

        $store = Game::select('store')->distinct()->pluck('store');
        
        $key_store = Game::select('key_store')->distinct()->pluck('key_store');

        $genre = Game::select('genre')->distinct()->pluck('genre');

        $maxPrice = $request->input('max_price');

        $results = Game::query();

        if ($query) {
            $results->where('title', 'like', '%' . $query . '%');
        }

        if ($selectedStore) {
            $results->where('store', 'like', '%' . $selectedStore . '%');
        }

        if ($selectedKey_store) {
            $results->where('key_store', 'like', '%' . $selectedKey_store . '%');
        }

        if ($selectedGenre) {
            $results->where('genre', 'like', '%' . $selectedGenre . '%');
        }

        if ($maxPrice) {
            $results->where('price', '<=', $maxPrice);
        }

        return view('search', [
            'results' => $results->get(),
            'query' => $query,
            'store' => $store,
            'selectedStore' => $selectedStore,
            'key_store' => $key_store,
            'selectedKey_store' => $selectedKey_store,
            'genre' => $genre,
            'selectedGenre' => $selectedGenre,
            'maxPrice' => $maxPrice,
        ]);
    }
}
