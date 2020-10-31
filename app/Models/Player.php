<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'nick_name',
        'number',
    ];
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
