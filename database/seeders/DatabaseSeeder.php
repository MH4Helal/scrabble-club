<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\Game;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 20 members
        Member::factory(20)->create()->each(function ($member) {
            // Create 10 games for each member and associate scores
            Game::factory(10)->create()->each(function ($game) use ($member) {
                // Attach the member to each game with a random score
                $member->games()->attach($game->id, ['score' => rand(50, 500)]);
            });
        });
    }
}
