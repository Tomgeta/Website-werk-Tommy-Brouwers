 /*---- opdracht1 ------*/
 function show_now() {
    var my_time = new Date();
    var localtime = my_time.toLocaleTimeString();
    alert('Huidige tijd : '+ localtime);
}
/*---- opdracht2 ------*/
function myGoogle() {
    if (window.confirm('Weet U zeker dat u naar Google wilt?')) {
        window.location = 'https://www.google.nl';
    } else {
        setTimeout(function() {
            location.href = "javascript_toets_tom.html"
        })
    }
}

function myWiki() {
    if (window.confirm('Weet U zeker dat u naar Wikipedia wilt?')) {
        window.location = "https://www.wikipedia.org/";
    } else {
        setTimeout(function() {
            location.href = "javascript_toets_tom.html"
        })
    }
}

function mySlim() {
    if (window.confirm('Weet U zeker dat u naar Slim in ICT wilt?')) {
        window.location = 'https://www.sliminict.nl/';
    } else {
        setTimeout(function() {
            location.href = "javascript_toets_tom.html"
        })
    }
}

/* opdracht 3&4 / in html bestand  */

/*---- opdracht5 ------*/
function add_border(str) {
    document.getElementById('color').border = str;
    document.getElementById('color').style.borderColor = "orange";
}
/*---- opdracht6 ------*/
function BlockRed() {
    document.getElementsByClassName("blok red")[0].style.backgroundColor = "blue";
}

function BlockGreen() {
    document.getElementsByClassName("blok green")[0].style.backgroundColor = "red";
}

function BlockBlue() {
    document.getElementsByClassName("blok blue")[0].style.backgroundColor = "green";
}

/*---- opdracht7 ------*/
function embed() {
    var url = document.getElementById('url').value
    document.getElementById('myframe').src = url;
}


/*---- opdracht8 ------*/
function Block2red() {
    document.getElementsByClassName("blok2 red")[0].style.opacity = "0.5";
}

function Block2green() {
    document.getElementsByClassName("blok2 green schuif1")[0].style.opacity = "0.5";
}

function Block2blue() {
    document.getElementsByClassName("blok2 blue schuif2")[0].style.opacity = "0.5";
}

/*--opdracht 9 / in html */

/*---- opdracht10 ------*/
function movediv1() {
    $('#blokmooi').animate({
        'marginLeft': "+=50px"
    });
}

function movediv2() {
    $('#blokmooi2').animate({
        'marginLeft': "+=50px"
    });
}

function movediv3() {
    $('#blokmooi3').animate({
        'marginLeft': "+=50px"
    });
}

function movediv4() {
    $('#blokmooi4').animate({
        'marginLeft': "+=50px"
    });
}

function movediv5() {
    $('#blokmooi5').animate({
        'marginLeft': "+=50px"
    });
}

function movediv6() {
    $('#blokmooi6').animate({
        'marginLeft': "+=50px"
    });
}

function movediv7() {
    $('#blokmooi7').animate({
        'marginLeft': "+=50px"
    });
}

function movediv8() {
    $('#blokmooi8').animate({
        'marginLeft': "+=50px"
    });
}

function movediv9() {
    $('#blokmooi9').animate({
        'marginLeft': "+=50px"
    });
}

/*---- opdracht11 / in html ------*/

/*---- opdracht12 / in html ------*/
 