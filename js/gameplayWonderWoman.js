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

    if (dropAll == 16) {

        setTimeout(sec);
        delete sec;
        clearTimeout(sec);
        alert("Jigsaw is Complete.  It has taken " + sec + " seconds.");
        //Alert used for error handling, timer stops with above code on certain drops but keeps going for some drops so alert to redirect resolves this.
        window.location = 'gameplaymedium_leaderboard.php';
    }
}, 1000);


$(function () { //Function opens
    $("#pieces1").draggable({ //Drag events 
        snap: '#puzzle1',
        snapMode: 'inner'
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
    $("#pieces5").draggable({
        snap: '#puzzle5',
        snapMode: 'inner'
    });
    $("#pieces6").draggable({
        snap: '#puzzle6',
        snapMode: 'inner'
    });
    $("#pieces7").draggable({
        snap: '#puzzle7',
        snapMode: 'inner'
    });
    $("#pieces8").draggable({
        snap: '#puzzle8',
        snapMode: 'inner'
    });
    $("#pieces9").draggable({
        snap: '#puzzle9',
        snapMode: 'inner'
    });
    $("#pieces10").draggable({
        snap: '#puzzle10',
        snapMode: 'inner'
    });
    $("#pieces11").draggable({
        snap: '#puzzle11',
        snapMode: 'inner'
    });
    $("#pieces12").draggable({
        snap: '#puzzle12',
        snapMode: 'inner'
    });
    $("#pieces13").draggable({
        snap: '#puzzle13',
        snapMode: 'inner'
    });
    $("#pieces14").draggable({
        snap: '#puzzle14',
        snapMode: 'inner'
    });
    $("#pieces15").draggable({
        snap: '#puzzle15',
        snapMode: 'inner'
    });
    $("#pieces16").draggable({
        snap: '#puzzle16',
        snapMode: 'inner'
    });

    //Drag events End

    $("#puzzle1").droppable({ //Droppable starts here
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle1').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle1').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle2").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
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
        activeClass: 'highlight',
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
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle4').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle4').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle5").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle5').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle5').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle6").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle6').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle6').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle7").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle7').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle7').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle8").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle8').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle8').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle9").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle9').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle9').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle10").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle10').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle10').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle11").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle11').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle11').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle12").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle12').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle12').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle13").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle13').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle13').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle14").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle14').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle14').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle15").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle15').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle15').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    $("#puzzle16").droppable({
        accept: '.puzzle',
        tolerance: 'fit',
        activeClass: 'highlight',
        drop: function (event, ui) {
            $('#puzzle16').addClass('pieceDropped');
            $('#dropAudio')[0].play();
            $('#puzzle16').fadeTo(1000, 0);
            ui.helper.hide('explode', {
                pieces: 20
            }, 1000);
        }
    });
    //Droppable code ends here


}); //Function closes
