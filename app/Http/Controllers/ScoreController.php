<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use PhpParser\Node\Stmt\TryCatch;

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
        // $scores = Snake::all();
        $scores = Score::orderBy("points", "DESC")->where('game', '=', 'tetris')->get();
        return view("games.tetris", ["ScoresFromController" => $scores]);
    }
    public function pingpongScores()
    {
        // $scores = Snake::all();
        $scores = Score::orderBy("points", "DESC")->where('game', '=', 'pingpong')->get();
        return view("games.pingpong", ["ScoresFromController" => $scores]);
    }
}
