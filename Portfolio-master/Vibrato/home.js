
// Sets blink to small VHS logo

var h1 = document.querySelector("h1");
var isPurple = false;

setInterval(function() {
    if (isPurple) {
        h1.style.color = "rgba(218, 59, 213, 0.49)";
    }   else {
        h1.style.color = "rgba(150, 44, 146, 0.49)";
    }
    isPurple = !isPurple;
}, 1000);


// Sets blink to large VHS logo

var miniLogo = document.getElementById("miniLogo");
var isPurp = false;

setInterval(function() {
    if (isPurp) {
        miniLogo.style.color = "rgba(218, 59, 213, 0.9)";
    }   else {
        miniLogo.style.color = "rgba(150, 44, 146, 0.9)";
    }
    isPurp = !isPurp;
}, 1000);



// Sets blink to first "Book Now" button

var bookNow1 = document.getElementById("bookNow1");
var isGreeny = false;

setInterval(function() {
    if (isGreeny) {
        bookNow1.style.color = "#bff463";
    } else {
        bookNow1.style.color = "#88b33e";
    }
    isGreeny = !isGreeny;
}, 1000);


// Sets blink to second "Book Now" button

var bookNow2 = document.getElementById("bookNow2");
var isGreen = false;

setInterval(function() {
    if (isGreen) {
        bookNow2.style.color = "#bff463";
    } else {
        bookNow2.style.color = "#88b33e";
    }
    isGreen = !isGreen;
}, 1000);
