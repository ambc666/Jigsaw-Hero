/******************************
All gameplay code is the same - differences in the jQuery and redirects based on drop pieces.  jQuery draggable and droppable varies depending on the jigsaw pieces required.
Flash x4
Batman x9
Wonder Woman x16
Superman x25

The top section of code is my JavaScript for the timer and telling the program when to stop then redirect.
The second section of code is my jQuery which is my drag and drop functionality.
******************************/

var sec = 0;

function pad(timeValue) {
    return timeValue > 9 ? timeValue : "0" + timeValue; //placeholder for 00
}
setInterval(function () {
    $("#seconds").html(pad(++sec % 60));
    $("#minutes").html(pad(parseInt(sec / 60, 10))); //placeholder + timer content.

    var dropAll = $('.pieceDropped').length;

    if (dropAll == 4) {

        setTimeout(sec);
        delete sec;
        clearTimeout(sec);
        alert("Jigsaw is Complete.  It has taken " + sec + " seconds.");
        //Alert used for error handling, timer stops with above code on certain drops but keeps going for some drops so alert to redirect resolves this.
        window.location = 'gameplayveryeasy_leaderboard.php';
    }
}, 1000);


$(function () { //Function opens
    $("#pieces1").draggable({ //Drag events 
        snap: '#puzzle1', //piece 1 snaps to puzzle 1
        snapMode: 'inner' //stops draggable from snapping to other pieces.
    });
    $("#pieces2").draggable({
        snap: '#puzzle2',
        snapMode: 'inner'
    });
    $("#pieces3").draggable({
        snap: '#puzzle3',
        snapMode: 'inner'
    });
    $("#pieces4").draggable({
        snap: '#puzzle4',
        snapMode: 'inner'
    });
    //Drag events End

    $("#puzzle1").droppable({ //Droppable starts here
        accept: '.puzzle', 
        tolerance: 'fit', //pieces need to be near exact (snap messes with the tolerance to a degree)/
        drop: function (event, ui) {
            $('#puzzle1').addClass('pieceDropped'); //Add's class to count when to finish puzzle.
            $('#dropAudio')[0].play(); //Plays audio clip on drop.
            $('#puzzle1').fadeTo(1000, 0); //Fades item to prevent it to be dragged again, Fades to total opacity and image reveal on background.
            ui.helper.hide('explode', { //Drop item explodes on fade event.  
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle2").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        drop: function (event, ui) {
            $('#puzzle2').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle2').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle3").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        drop: function (event, ui) {
            $('#puzzle3').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle3').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle4").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        drop: function (event, ui) {
            $('#puzzle4').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle4').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    //Droppable code ends here


}); //Function closes
