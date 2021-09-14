@extends('layouts.app')

@section('title')
    PingPong
@endsection

@include("layouts.head")

@section('content')
    <div class="games-container">
        <div class="infogame-container">
            <h2>3D Ping Pong</h2><br />
            <p>3D Ping Pong is a game in which two players hit a ball with a bat back and forth over the led cube. The
                purpose of this game is to hit the ball in such a way that the opponent cannot hit the ball.</p><br /><br />
            <h2>Leaderboard</h2>
        </div>
        <div id="containerleaderboard">

            <div id="whitetext">
                <div id="rowtlb">
                    <div class="placelb" id="whitetext">Rank</div>
                    <div class="namelb" id="whitetext">
                        <p class="distanceplayer" id="whitetext">Player</p>
                    </div>
                    <div class="scorelb" id="whitetext">Points</div>
                </div>
            </div>

            <?php
                $i = 1;
            ?>

            @foreach ($ScoresFromController as $scoreForLoop)
                {{-- {{ $scoreForLoop->game }} --}}

                <div class="rowlb">
                    <div class="placelb">#<?php echo $i++; ?>.</div>
                    <div class="namelb">
                        <p class="distanceplayer">{{ $scoreForLoop->username }}</p>
                    </div>
                    <div class="scorelb">{{ $scoreForLoop->points }} pts</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
