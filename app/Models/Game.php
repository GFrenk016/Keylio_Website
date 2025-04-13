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
        'key_store',
        'genre',
        'image',
        'store',
    ];

    public function getDiscountPercentageAttribute()
    {
        if ($this->original_price && $this->original_price > $this->price) {
            return round((($this->original_price - $this->price) / $this->original_price) * 100);
        }

        return 0;
    }
}
