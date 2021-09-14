@extends('layouts.app')

@section('title')
    Tetris
@endsection

@section('content')
    <div class="games-container">
        <div class="infogame-container">
            <h2>3D Tetris</h2><br />
            <p>3D Tetris is a game where the blocks on the led cube are constantly falling down from the top of the led
                cube. By rotating and moving the blocks horizontally, the player must ensure that, once they reach the
                bottom, they form a horizontal closed line. Any successfully formed horizontal line gets removed.</p>
            <br /><br />
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
