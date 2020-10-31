<?php

namespace App\MvpModule;
use App\MvpModule\Sport;
use App\Models\Basketball as model;

class Basketball implements Sport {
    private $score_query;
    private $scored_points_weight = 2;
    private $rebound_points_weight = 1;
    private $assests_weight = 3;
    public function __construct(model $model){
        $this->model = $model;
        $this->score_query = "scored_points*$this->scored_points_weight +
         rebounds*$this->rebound_points_weight +
          assists*$this->assests_weight";
    }
    public function getWinnerTeam($match_id){
        $winner_team = $this->model
        ->where('match_id',$match_id)
        ->selectRaw("sum($this->score_query )as score,team_id")
        ->join('players',"basketball.player_id","=","players.id")->groupBy('team_id')
        ->orderBY('score','DESC')->first();
        return $winner_team->team_id;
    }
    public function getMVP($match_id){
        $mvp = $this->model
        ->where('match_id',$match_id)
        ->with(['player'=>function($query){
            $query->select('team_id','id','name','nick_name');
        }])
        ->selectRaw($this->score_query.' as score,player_id')
        ->orderBY('score','DESC')->first();
        return $mvp;
    }
    public function calculateMVP($match_id){
        $winner_team = $this->getWinnerTeam($match_id);
        $mvp = $this->getMVP($match_id);
        if($winner_team === $mvp->player->team_id)
            $mvp->score += 10;
        $response = ["score" => $mvp->score, "name" => $mvp->player->name, "nick_name" => $mvp->player->nick_name];
        return Response()->json($response);
    }
}