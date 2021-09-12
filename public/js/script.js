function selector(x) {
    document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/Untitled.png";
}
function removeSelector(x) {
    document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/oksok.png";
}

var char8;
var charH;
var charK;
var charC;
var charS;

function tbPassword_KeyUp() {
    char8 = document.getElementById("char8");
    charH = document.getElementById("charH");
    charK = document.getElementById("charK");
    charC = document.getElementById("charC");
    charS = document.getElementById("charS");
    char8.style.color = "white";
    charH.style.color = "white";
    charK.style.color = "white";
    charC.style.color = "white";
    charS.style.color = "white";

    var hallo = document.getElementById("password").value;

    if (hallo.length > 0) {
        validatePass(hallo);
    }
}

function validatePass(x) {
    var bool8 = false;
    var boolH = false;
    var boolK = false;
    var boolC = false;
    var boolS = false;

    bool8 = /.{8,}/.test(x);
    boolH = /[A-Z]/.test(x);
    boolK = /[a-z]/.test(x);
    boolC = /[0-9]/.test(x);
    boolS = /[!#$%&'"()*+,-./:;<=>?@[\]^_`{|}~]/.test(x);

    if (!bool8) { char8.style.color = "red"; }
    if (!boolH) { charH.style.color = "red"; }
    if (!boolK) { charK.style.color = "red"; }
    if (!boolC) { charC.style.color = "red"; }
    if (!boolS) { charS.style.color = "red"; }
}
