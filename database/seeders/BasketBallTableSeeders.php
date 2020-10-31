<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasketBallTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('basketball')->insert([
            ['player_id' => '1', "scored_points" => "10", "rebounds" => "2", "assists" => "7", "match_id" => 1, "position" => "G"],
            ['player_id' => '2', "scored_points" => "0", "rebounds" => "10", "assists" => "0", "match_id" => 1, "position" => "F"],
            ['player_id' => '3', "scored_points" => "15", "rebounds" => "10", "assists" => "4", "match_id" => 1, "position" => "C"],
            ['player_id' => '4', "scored_points" => "20", "rebounds" => "0", "assists" => "0", "match_id" => 1, "position" => "G"],
            ['player_id' => '5', "scored_points" => "4", "rebounds" => "7", "assists" => "7", "match_id" => 1, "position" => "F"],
            ['player_id' => '6', "scored_points" => "8", "rebounds" => "10", "assists" => "0", "match_id" => 1, "position" => "C"],
            
            ['player_id' => '1', "scored_points" => "8", "rebounds" => "12", "assists" => "7", "match_id" => 2, "position" => "G"],
            ['player_id' => '2', "scored_points" => "0", "rebounds" => "0", "assists" => "0", "match_id" => 2, "position" => "F"],
            ['player_id' => '3', "scored_points" => "5", "rebounds" => "1", "assists" => "41", "match_id" => 2, "position" => "C"],
            ['player_id' => '4', "scored_points" => "2", "rebounds" => "10", "assists" => "10", "match_id" => 2, "position" => "G"],
            ['player_id' => '5', "scored_points" => "41", "rebounds" => "14", "assists" => "17", "match_id" => 2, "position" => "F"],
            ['player_id' => '6', "scored_points" => "15", "rebounds" => "1", "assists" => "10", "match_id" => 2, "position" => "C"],

            ['player_id' => '1', "scored_points" => "6", "rebounds" => "12", "assists" => "17", "match_id" => 3, "position" => "G"],
            ['player_id' => '2', "scored_points" => "5", "rebounds" => "10", "assists" => "0", "match_id" => 3, "position" => "F"],
            ['player_id' => '3', "scored_points" => "15", "rebounds" => "10", "assists" => "1", "match_id" => 3, "position" => "C"],
            ['player_id' => '4', "scored_points" => "54", "rebounds" => "0", "assists" => "0", "match_id" => 3, "position" => "G"],
            ['player_id' => '5', "scored_points" => "1", "rebounds" => "1", "assists" => "8", "match_id" => 3, "position" => "F"],
            ['player_id' => '6', "scored_points" => "0", "rebounds" => "4", "assists" => "5", "match_id" => 3, "position" => "C"],
        ]);
    }
}
