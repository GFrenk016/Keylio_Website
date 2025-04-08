<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        $results = Game::where('title', 'like', "%$query%")->get();

        return view('search', compact('query', 'results'));
    }
}
