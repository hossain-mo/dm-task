<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basketball extends Model
{
    protected $table = 'basketball';
    protected $fillable = [
        'scored_points',
        'rebounds',
        'match_id',
        'assists',
        'position',
    ];
    public function player(){
        return $this->belongsTo(Player::class);
    }
}
