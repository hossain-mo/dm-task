<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketballTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basketball', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id');
            $table->integer('scored_points');
            $table->integer('rebounds');
            $table->integer('assists');
            $table->unsignedInteger('match_id');
            $table->enum('position', ['G', 'F','C']);	
            $table->timestamps();

        });
        Schema::table('basketball', function (Blueprint $table) {
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('match_id')->references('id')->on('matches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basketball');
    }
}
