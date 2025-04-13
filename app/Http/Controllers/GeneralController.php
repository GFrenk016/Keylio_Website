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

        $results = [];

        if ($query) {
            $results = Game::where('title', 'like', '%' . $query . '%')->get();
        }

        return view('search', compact('results', 'query'));
    }
}
