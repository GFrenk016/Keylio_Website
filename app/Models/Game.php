<?php

namespace App\Models;

use App\Models\Game;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'price',
        'original_price',
        'platform',
        'genre',
        'image',
        'store',
    ];
}
