<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MvpModule\Context;
use App\Http\Requests\MVPRequest;
class EntryController extends Controller
{
    public function __construct(Context $context){
        $this->context = $context;
    }
    public function index(MVPRequest $request){
        $sport = sprintf('App\\MvpModule\\%s',ucfirst($request->sport_type));
        $model = sprintf('App\\Models\\%s',ucfirst($request->sport_type));
        return $this->context->calculateMVP(new $sport (new $model), $request->match_id);
    }
}
