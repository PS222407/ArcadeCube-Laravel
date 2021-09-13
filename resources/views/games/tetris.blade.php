@extends('layouts.app')

@section('title')
    Tetris
@endsection

@section('content')
    <div class="games-container">
        <div class="infogame-container">
            <h2>3D Tetris</h2><br/>
            <p>3D Tetris is a game where the blocks on the led cube are constantly falling down from the top of the led cube. By rotating and moving the blocks horizontally, the player must ensure that, once they reach the bottom, they form a horizontal closed line. Any successfully formed horizontal line gets removed.</p><br/><br/>
            <h2>Leaderboard</h2>
        </div>
        <div id="containerleaderboard">
            <div id="whitetext">
                <div id="rowtlb">
                    <div class="placelb" id="whitetext">Rank</div><div class="namelb" id="whitetext"><p class="distanceplayer" id="whitetext">Player</p></div><div class="scorelb" id="whitetext">Points</div>
                </div>
            </div>

            <div class="rowlb">
                <div class="placelb">#1.</div><div class="namelb"><p class="distanceplayer">Mypro</p></div><div class="scorelb">120521P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#2.</div><div class="namelb"><p class="distanceplayer">Player2</p></div><div class="scorelb">55924P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#3.</div><div class="namelb"><p class="distanceplayer">Player3</p></div><div class="scorelb">55872P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#4.</div><div class="namelb"><p class="distanceplayer">Player4</p></div><div class="scorelb">43776P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#5.</div><div class="namelb"><p class="distanceplayer">Player5</p></div><div class="scorelb">42728P</div>
            </div>
            <div class="rowlb">
                <div class="placelb">#6.</div><div class="namelb"><p class="distanceplayer">Player6</p></div><div class="scorelb">41691P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#7.</div><div class="namelb"><p class="distanceplayer">Player7</p></div><div class="scorelb">38688P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#8.</div><div class="namelb"><p class="distanceplayer">Player8</p></div><div class="scorelb">36645P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#9.</div><div class="namelb"><p class="distanceplayer">Player9</p></div><div class="scorelb">35640P</div>
            </div>

            <div class="rowlb">
                <div class="placelb">#10.</div><div class="namelb"><p class="distanceplayer">Player10</p></div><div class="scorelb">33495P</div>
            </div>
        </div>
    </div>
@endsection
