<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TeamsTableSeeders::class,
            MatchTableSeeder::class,
            PlayersTableSeeders::class,
            BasketBallTableSeeders::class,
            HandBallTableSeeders::class,
        ]);
    }
}
