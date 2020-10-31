<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Handball extends Model
{
    protected $table = 'handball';
    protected $fillable = [
        'goal_made',
        'goal_received',
        'position',
        'match_id'
    ];
    public function player(){
        return $this->belongsTo(Player::class);
    }
}
