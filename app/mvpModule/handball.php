<?php

namespace App\MvpModule;
use App\MvpModule\Sport;
use App\Models\Handball as model;

class Handball implements Sport {
    private $goal_made_weight = 5;
    private $goal_received_weight = 2;
    private $goal_keeper_position_weight = 50;
    private $field_player_position_weight = 20;
    private $score_query;
    public function __construct(model $model){
        $this->model = $model;
        $this->score_query = "(goal_made * $this->goal_made_weight)  - 
        (goal_received * $this->goal_received_weight)  +
         if(position = 'G', $this->goal_keeper_position_weight , $this->field_player_position_weight)";

    }
    public function getWinnerTeam($match_id){
        $winner_team = $this->model
        ->selectRaw("sum( $this->score_query )as score,team_id")
        ->where('match_id',$match_id)
        ->join('players',"handball.player_id","=","players.id")->groupBy('team_id')
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