<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GeneralController extends Controller
{
    public function homepage()
    {
        // $topDeals = Game::orderByRaw('original_price - price DESC')
        //     ->take(6)
        //     ->get();

        // return view('welcome', compact('topDeals'));

        return view('welcome');
    }
}
