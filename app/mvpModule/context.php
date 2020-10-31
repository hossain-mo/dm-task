<?php

namespace App\MvpModule;
use App\MvpModule\Sport;


class Context {
    private ?Sport $sport = null;
    public function calculateMVP(Sport $sport,$match_id){
        $this->sport = $sport;
        return $this->sport->calculateMVP($match_id);
    }
}