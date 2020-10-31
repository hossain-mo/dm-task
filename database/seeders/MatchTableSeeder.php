<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('matches')->insert([
            ['name' => 'Match A'],
            ['name' => 'Match B'],
            ['name' => 'Match C']
        ]);
    }
}
