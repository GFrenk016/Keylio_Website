<?php

namespace Database\Seeders;
use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::insert([
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'price' => 39.99,
                'original_price' => 59.99,
                'key_store' => 'GAMIVO',
                'genre' => 'Adventure',
                'image' => 'https://picsum.photos/300/200?random=1',
                'store' => 'Nintendo eShop',
            ],
            [
                'title' => 'Grand Theft Auto V',
                'price' => 9.99,
                'original_price' => 19.99,
                'key_store' => 'Instant Gaming',
                'genre' => 'Action',
                'image' => 'https://picsum.photos/300/200?random=2',
                'store' => 'Steam',
            ],
            [
                'title' => 'Call of Duty: Black Ops 4',
                'price' => 59.99,
                'original_price' => 79.99,
                'key_store' => 'G2A',
                'genre' => 'FPS',
                'image' => 'https://picsum.photos/300/200?random=3',
                'store' => 'Steam',
            ],
            [
                'title' => 'Minecraft',
                'price' => 19.99,
                'original_price' => 29.99,
                'key_store' => 'Instant Gaming',
                'genre' => 'Survival',
                'image' => 'https://picsum.photos/300/200?random=4',
                'store' => 'Microsoft Store',
            ],
            [
                'title' => 'The Last of Us',
                'price' => 49.99,
                'original_price' => 59.99,
                'key_store' => 'Instant Gaming',
                'genre' => 'Action',
                'image' => 'https://picsum.photos/300/200?random=5',
                'store' => 'PlayStation Store',
            ]
        ]);
    }
}
