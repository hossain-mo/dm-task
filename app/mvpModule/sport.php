<?php

namespace App\MvpModule;


interface Sport {
    public function getWinnerTeam(integer $match_id);
    public function getMVP(integer $match_id);
    public function calculateMVP(integer $match_id);
}