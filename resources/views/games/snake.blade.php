@extends('layouts.app')

@section('title')
    Snake
@endsection

@section('content')
    <div class="games-container">
        <div class="infogame-container">
            <h2>3D Snake</h2><br/>
            <p>3D Snake is a game where you have to get as tall as possible. When the whole block is filled you have won! After that you continue to make your highscore as high as possible.</p><br/><br/>
            <h2>Leaderboard</h2>
        </div>
        <div id="containerleaderboard">

            <div id="whitetext">
                <div id="rowtlb">
                    <div class="placelb" id="whitetext">Rank</div><div class="namelb" id="whitetext"><p class="distanceplayer" id="whitetext">Player</p></div><div class="scorelb" id="whitetext">Points</div>
                </div>
            </div>

            <div class="rowlb">
                <div class="placelb">#1.</div><div class="namelb"><p class="distanceplayer">Mypro</p></div><div class="scorelb">1521P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#2.</div><div class="namelb"><p class="distanceplayer">Player2</p></div><div class="scorelb">924P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#3.</div><div class="namelb"><p class="distanceplayer">Player3</p></div><div class="scorelb">872P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#4.</div><div class="namelb"><p class="distanceplayer">Player4</p></div><div class="scorelb">776P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#5.</div><div class="namelb"><p class="distanceplayer">Player5</p></div><div class="scorelb">728P</div>
            </div>
            <div class="rowlb">
                <div class="placelb">#6.</div><div class="namelb"><p class="distanceplayer">Player6</p></div><div class="scorelb">691P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#7.</div><div class="namelb"><p class="distanceplayer">Player7</p></div><div class="scorelb">688P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#8.</div><div class="namelb"><p class="distanceplayer">Player8</p></div><div class="scorelb">645P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#9.</div><div class="namelb"><p class="distanceplayer">Player9</p></div><div class="scorelb">640P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#10.</div><div class="namelb"><p class="distanceplayer">Player10</p></div><div class="scorelb">495P</div>
            </div>
        </div>
    </div>
@endsection
