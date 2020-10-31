<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('players')->insert([
            ['name' => 'player 1', "nick_name" => "nick1", "number" => "4", "team_id" => "1"],
            ['name' => 'player 2', "nick_name" => "nick2", "number" => "8", "team_id" => "1"],
            ['name' => 'player 3', "nick_name" => "nick3", "number" => "15", "team_id" => "1"],
            ['name' => 'player 4', "nick_name" => "nick4", "number" => "16", "team_id" => "2"],
            ['name' => 'player 5', "nick_name" => "nick5", "number" => "23", "team_id" => "2"],
            ['name' => 'player 6', "nick_name" => "nick6", "number" => "42", "team_id" => "2"]
        ]);
    }
}
