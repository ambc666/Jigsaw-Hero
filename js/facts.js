/*****************************************
 *           Flash                       *
 ******************************************/
/* On click toggle function - Click the Fact box to toggle a box with facts. 
Facts are loaded via an array and iteration loop. Each character has 3 facts each and their own code for same functionality. */
$(document).ready(function () { 
    $(".factToggle").click(function () {
        $(".flashFacts").toggle();
        $(".flashFacts").css({
            backgroundColor: '#8ABF43',
            border: '2px solid #fff',
            padding: '0px 20px 0px 20px'
        });
    });
});

function flashFacts() {

    var flash = ["1.", "2.", "3."];

    for (i = 0; i < flash.length; i++) {

        if (i == 0) { //fact1
            document.getElementById("flashFact1").innerHTML = flash[i] + " He often races Superman to see who is the fastest. It usually ends up in a tie.";
        } else if (i == 1) { //fact2
            document.getElementById("flashFact2").innerHTML = flash[i] + " The Flash is good friends with superhero the Green Lantern.";
        } else if (i == 2) { //fact3
            document.getElementById("flashFact3").innerHTML = flash[i] + " He can move so fast he can travel in time.";
        }
    }
}

/*****************************************
 *           Batman                      *
 ******************************************/
$(document).ready(function () {
    $(".factToggle").click(function () {
        $(".batManFacts").toggle();
        $(".batManFacts").css({
            backgroundColor: '#8ABF43',
            border: '2px solid #fff',
            padding: '0px 20px 0px 20px'
        });
    });
});

function batmanFacts() {

    var batman = ["1.", "2.", "3."];

    for (i = 0; i < batman.length; i++) {

        if (i == 0) { //fact1
            document.getElementById("batmanFact1").innerHTML = batman[i] + " The police commissioner uses a spotlight that shines a bat symbol in the sky called the batsignal when he needs Batman's help.";
        } else if (i == 1) { //fact2
            document.getElementById("batmanFact2").innerHTML = batman[i] + " He is considered the greatest detective in the world.";
        } else if (i == 2) { //fact3
            document.getElementById("batmanFact3").innerHTML = batman[i] + " He teamed up with Superman and they both know the other's identity.";
        }
    }
}

/*****************************************
 *           Wonder Woman                *
 ******************************************/
$(document).ready(function () {
    $(".factToggle").click(function () {
        $(".wonderWomanFacts").toggle();
        $(".wonderWomanFacts").css({
            backgroundColor: '#8ABF43',
            border: '2px solid #fff',
            padding: '0px 20px 0px 20px'
        });
    });
});

function wonderWomanFacts() {

    var wonderWoman = ["1.", "2.", "3."];

    for (i = 0; i < wonderWoman.length; i++) {

        if (i == 0) { //fact1
            document.getElementById("wonderWomanFact1").innerHTML = wonderWoman[i] + " Wonder Woman's tiara is so sharp she was able to cut Superman.";
        } else if (i == 1) { //fact2
            document.getElementById("wonderWomanFact2").innerHTML = wonderWoman[i] + " Wonder Woman's Creator Also Invented the Lie Detector Test.";
        } else if (i == 2) { //fact3
            document.getElementById("wonderWomanFact3").innerHTML = wonderWoman[i] + " She's Worthy of Wielding Thor's Hammer.";
        }
    }
}
/*****************************************
 *           Superman                    *
 ******************************************/
$(document).ready(function () {
    $(".factToggle").click(function () {
        $(".superManFacts").toggle();
        $(".superManFacts").css({
            backgroundColor: '#8ABF43',
            border: '2px solid #fff',
            padding: '0px 20px 0px 20px'
        });
    });
});

function superManFacts() {

    var superman = ["1.", "2.", "3."];

    for (i = 0; i < superman.length; i++) {

        if (i == 0) { //fact1
            document.getElementById("supermanFact1").innerHTML = superman[i] + " Supermans original name on the planet Krypton was Kal-El.";
        } else if (i == 1) { //fact2
            document.getElementById("supermanFact2").innerHTML = superman[i] + " Supermans middle name is Joseph.";
        } else if (i == 2) { //fact3
            document.getElementById("supermanFact3").innerHTML = superman[i] + " Superman gave Batman a piece of Kryptonite to be used if he ever got out of control.";
        }
    }
}
