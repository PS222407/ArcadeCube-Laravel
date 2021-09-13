@extends('layouts.app')

@section('title')
    PingPong
@endsection

@include("layouts.head")

@section('content')
    <div class="games-container">
        <div class="infogame-container">
            <h2>3D Ping Pong</h2><br/>
            <p>3D Ping Pong is a game in which two players hit a ball with a bat back and forth over the led cube. The purpose of this game is to hit the ball in such a way that the opponent cannot hit the ball.</p><br/><br/>
            <h2>Leaderboard</h2>
        </div>
        <div id="containerleaderboard">

            <div id="whitetext">
                <div id="rowtlb">
                    <div class="placelb" id="whitetext">Rank</div><div class="namelb" id="whitetext"><p class="distanceplayer" id="whitetext">Player</p></div><div class="scorelb" id="whitetext">Points</div>
                </div>
            </div>

            <div class="rowlb">
                <div class="placelb">#1.</div><div class="namelb"><p class="distanceplayer">Mypro</p></div><div class="scorelb">25P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#2.</div><div class="namelb"><p class="distanceplayer">Player2</p></div><div class="scorelb">24P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#3.</div><div class="namelb"><p class="distanceplayer">Player3</p></div><div class="scorelb">22P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#4.</div><div class="namelb"><p class="distanceplayer">Player4</p></div><div class="scorelb">20P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#5.</div><div class="namelb"><p class="distanceplayer">Player5</p></div><div class="scorelb">20P</div>
            </div>
            <div class="rowlb">
                <div class="placelb">#6.</div><div class="namelb"><p class="distanceplayer">Player6</p></div><div class="scorelb">20P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#7.</div><div class="namelb"><p class="distanceplayer">Player7</p></div><div class="scorelb">16P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#8.</div><div class="namelb"><p class="distanceplayer">Player8</p></div><div class="scorelb">14P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#9.</div><div class="namelb"><p class="distanceplayer">Player9</p></div><div class="scorelb">13P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#10.</div><div class="namelb"><p class="distanceplayer">Player10</p></div><div class="scorelb">11P</div>
            </div>
        </div>
    </div>
@endsection
