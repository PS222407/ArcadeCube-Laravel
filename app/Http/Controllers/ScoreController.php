<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Arr;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;


class ScoreController extends Score
{
    public function snakeScores()
    {
        // " SELECT scores.id, scores.points, scores.game, users.username
        // FROM scores
        // INNER JOIN users ON scores.user_id=users.id
        // WHERE scores.user_id='$id';
        // "
        $scores = Score::orderBy("points", "DESC")
                    ->join('users','scores.user_id','=','users.id')
                    ->where('game', '=', 'snake')
                    ->select('scores.*','users.username')
                    ->limit(10)
                    ->get();
        return view("games.snake", ["ScoresFromController" => $scores]);
    }
    public function tetrisScores()
    {
        $scores = Score::orderBy("points", "DESC")
                    ->join('users','scores.user_id','=','users.id')
                    ->where('game', '=', 'tetris')
                    ->select('scores.*','users.username')
                    ->limit(10)
                    ->get();
        return view("games.tetris", ["ScoresFromController" => $scores]);
    }
    public function pingpongScores()
    {
        $scores = Score::orderBy("points", "DESC")
                    ->join('users','scores.user_id','=','users.id')
                    ->where('game', '=', 'pingpong')
                    ->select('scores.*','users.username')
                    ->limit(10)
                    ->get();
        return view("games.pingpong", ["ScoresFromController" => $scores]);
    }

    public function accountScores()
    {
        $snake = Score::where('user_id', '=', Auth::user()->id)->where('game', '=', 'snake')->value('points');
        $tetris = Score::where('user_id', '=', Auth::user()->id)->where('game', '=', 'tetris')->value('points');
        $pingpong = Score::where('user_id', '=', Auth::user()->id)->where('game', '=', 'pingpong')->value('points');
        // $username = Customer::where('id', '=', Auth::user()->id)->value('id');

        return view("account", array("snake" => $snake, "tetris" => $tetris, "pingpong" => $pingpong)); // "username" => $username
        // return view("account"); // "username" => $username
    }
}
