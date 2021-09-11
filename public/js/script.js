function selector(x) {
    document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/Untitled.png";
}
function removeSelector(x) {
    document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/oksok.png";
}
