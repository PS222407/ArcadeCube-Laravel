<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\User;
use Illuminate\Support\Arr;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;


class ScoreController extends Score
{
    public function snakeScores()
    {
        // $scores = Snake::all();
        $scores = Score::orderBy("points", "DESC")->where('game', '=', 'snake')->get();
        return view("games.snake", ["ScoresFromController" => $scores]);
    }
    public function tetrisScores()
    {
        $scores = Score::orderBy("points", "DESC")->where('game', '=', 'tetris')->get();
        return view("games.tetris", ["ScoresFromController" => $scores]);
    }
    public function pingpongScores()
    {
        $scores = Score::orderBy("points", "DESC")->where('game', '=', 'pingpong')->get();
        return view("games.pingpong", ["ScoresFromController" => $scores]);
    }

    public function accountScores()
    {
        $snake = Score::where('username', '=', Auth::user()->username)->where('game', '=', 'snake')->value('points');
        $tetris = Score::where('username', '=', Auth::user()->username)->where('game', '=', 'tetris')->value('points');
        $pingpong = Score::where('username', '=', Auth::user()->username)->where('game', '=', 'pingpong')->value('points');


        return view("account", array("snake" => $snake, "tetris" => $tetris, "pingpong" => $pingpong));
    }
}
