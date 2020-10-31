<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HandBallTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('handball')->insert([
            ['player_id' => '1', "goal_made" => 0, "goal_received" => "20", "match_id" => 1, "position" => "G"],
            ['player_id' => '2', "goal_made" => 15, "goal_received" => "20", "match_id" => 1, "position" => "F"],
            ['player_id' => '3', "goal_made" => 10, "goal_received" => "20", "match_id" => 1, "position" => "F"],
            ['player_id' => '4', "goal_made" => 1, "goal_received" => "25", "match_id" => 1, "position" => "G"],
            ['player_id' => '5', "goal_made" => 12, "goal_received" => "25", "match_id" => 1, "position" => "F"],
            ['player_id' => '6', "goal_made" => 8, "goal_received" => "25",  "match_id" => 1, "position" => "F"],

            ['player_id' => '1', "goal_made" => 0, "goal_received" => "20", "match_id" => 2, "position" => "G"],
            ['player_id' => '2', "goal_made" => 15, "goal_received" => "15", "match_id" => 2, "position" => "F"],
            ['player_id' => '3', "goal_made" => 20, "goal_received" => "10", "match_id" => 2, "position" => "F"],
            ['player_id' => '4', "goal_made" => 2, "goal_received" => "5", "match_id" => 2, "position" => "G"],
            ['player_id' => '5', "goal_made" => 22, "goal_received" => "5", "match_id" => 2, "position" => "F"],
            ['player_id' => '6', "goal_made" => 8, "goal_received" => "2",  "match_id" => 2, "position" => "F"],

            ['player_id' => '3', "goal_made" => 40, "goal_received" => "10", "match_id" => 3, "position" => "G"],
            ['player_id' => '2', "goal_made" => 35, "goal_received" => "10", "match_id" => 3, "position" => "F"],
            ['player_id' => '3', "goal_made" => 30, "goal_received" => "10", "match_id" => 3, "position" => "F"],
            ['player_id' => '4', "goal_made" => 39, "goal_received" => "35", "match_id" => 3, "position" => "G"],
            ['player_id' => '5', "goal_made" => 32, "goal_received" => "50", "match_id" => 3, "position" => "F"],
            ['player_id' => '6', "goal_made" => 8, "goal_received" => "20",  "match_id" => 3, "position" => "F"],
        ]);
    }
}
