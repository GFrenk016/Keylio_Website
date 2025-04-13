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
}
