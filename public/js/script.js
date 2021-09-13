function selector(x) {
    switch (x) {
        case 1:
            document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/snake3dS.png";
            break;
        case 2:
            document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/Untitled.png";
            break;
        case 3:
            document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/Untitled.png";
            break;

        default:
            break;
    }
}
function removeSelector(x) {
    switch (x) {
        case 1:
            document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/snake3d.png";
            break;
        case 2:
            document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/oksok.png";
            break;
        case 3:
            document.getElementsByClassName("gamecards-container")[0].children[x - 1].children[0].src = "../images/games/oksok.png";
            break;

        default:
            break;
    }
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

function showPassword(y) {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        y.src = "../images/eyeline.png";
    } else {
        x.type = "password";
        y.src = "../images/eye.png";
    }
}
function showPasswordConfirm(y) {
    var x = document.getElementById("password-confirm");
    if (x.type === "password") {
        x.type = "text";
        y.src = "../images/eyeline.png";
    } else {
        x.type = "password";
        y.src = "../images/eye.png";
    }
}

// mobiele navigatebar
var x = 1;
function openAccountMenu() {
    var el = document.getElementById("dropdown-account");
    var arr = el.children;
    if (x == 1) {
        x = 0;
        el.style.height = 100 + "px";
        el.style.borderBottomWidth = "2px";
        el.style.borderLeftWidth = "2px";

        for (let i = 0; i < arr.length; i++) {
            arr[i].style.display = "block";
        }
    }
    else{
        x = 1;
        el.style.height = 0 + "px";
        el.style.borderBottomWidth = "0px";
        el.style.borderLeftWidth = "0px";

        for (let i = 0; i < arr.length; i++) {
            arr[i].style.display = "none";
        }
    }
}


// var hoi = 1;
// function hahalol() {
//     var randomX = Math.floor(Math.random() * document.getElementById('welcome-grid').clientWidth);
//     var randomY = Math.floor(Math.random() * document.getElementById('welcome-grid').clientHeight);
//     if (hoi == 1) {
//         document.getElementById("hahalol").style.transform = "translate(" + (-randomX + 170) + "px," + (randomY - 100) + "px)";
//         // document.getElementById("hahalol").style.transform = "translateY(" + randomY + "px)";

//         hoi = 0;
//     }
//     else {
//         document.getElementById("hahalol").style.transform = "translateY(0px)";
//         document.getElementById("hahalol").style.transform = "translateX(0px)";
//         hoi = 1;
//     }
// }
