const textArray = ["Welcome to Bake The Code", "Developed by the students of NSEC, ECE Department", "Happy Coding!"];
const typeDelay = 75; //Specified in ms
const eraseDelay = 75; //Specified in ms
const eraseAfterMs = 200; //Specified in ms
const TypeAfterMs = 200; //Specified in ms

var i = 0;
var j = 0;
var txt = "";

var num = document.getElementsByClassName('imgIcon').length;
var CriticalTxt = /<|>/ig;

//Typewriter animation function
function transfer(p) {
    switch (p) {
        case '1':
            window.open('test.html');
            break;
        case '2':
            window.open('https://www.youtube.com/c/CheezePie963');
            break;
        case '3':
            window.open('https://www.youtube.com/c/CheezePie963');
    }
}
function type() {
    textNow = textArray[i];
    if (j < textNow.length) {
        txt = txt + textNow.charAt(j);
        j = j + 1;
        document.getElementById("heading").innerHTML = txt;
        setTimeout(type, typeDelay);
    }
    else {
        setTimeout(erase, eraseAfterMs);
    }
}
function erase() {
    if (j >= 0) {
        document.getElementById("heading").innerHTML = txt.substring(0, j);
        j = j - 1;
        setTimeout(erase, eraseDelay);
    }
    else {
        txt = "";
        i = (i + 1) % (textArray.length);
        setTimeout(type, TypeAfterMs);
    }
}




//Search feature
$(document).ready(function () {
    $('.searchhere').keyup(function () {
        var txt = $(this).val();
        var reg = new RegExp(txt, 'i');
        for (let i = 0; i < num; i++) {

        }

    })
});



//Angular brackets checker
$(document).ready(function () {
    $('.form-control').keyup(function () {
        var scriptCheck = $(this).val();
        if (scriptCheck.match(CriticalTxt) != null) {
            scriptCheck = scriptCheck.replace(CriticalTxt, '');
            $(this).val(scriptCheck);
            alert("You cannot use angular brackets here");
        }

    });
});




// Delete this part after Social Media has been established
$(document).ready(function () {
    $('[data-toggle="popover"]').popover();
});


//Random Quotes Section
const url="https://programming-quotes-api.herokuapp.com/quotes/random";
function getData(){
    fetch(url).then(res => res.json()).then(data => {
        document.getElementById("quote").innerHTML=data["en"]
        document.getElementById("author").innerHTML='~'+data["author"]});
}
getData();

$('.alert').alert()

//Calling the Trypewriter Animation function
document.addEventListener("DOMContentLoaded", function () {
    setTimeout(type, TypeAfterMs);
});