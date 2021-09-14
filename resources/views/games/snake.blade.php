@extends('layouts.app')

@section('title')
    Snake
@endsection

@section('content')
    <div class="games-container">
        <div class="infogame-container">
            <h2>3D Snake</h2><br />
            <p>3D Snake is a game where you have to get as tall as possible. When the whole block is filled you have won!
                After that you continue to make your highscore as high as possible.</p><br /><br />
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
                    <div class="placelb">#<?php echo $i++ ?>.</div>
                    <div class="namelb">
                        <p class="distanceplayer">{{ $scoreForLoop->username }}</p>
                    </div>
                    <div class="scorelb">{{ $scoreForLoop->points }} pts</div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
