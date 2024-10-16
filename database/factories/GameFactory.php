<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition()
    {
        return [
            'game_name' => 'Game ' . $this->faker->word,
            'game_date' => $this->faker->date(),
        ];
    }
}
