<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHandballTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handball', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id');
            $table->integer('goal_made');
            $table->integer('goal_received');
            $table->unsignedInteger('match_id');
            $table->enum('position', ['G', 'F']);	
            $table->timestamps();
        });
        Schema::table('handball', function (Blueprint $table) {
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
        Schema::dropIfExists('handball');
    }
}
