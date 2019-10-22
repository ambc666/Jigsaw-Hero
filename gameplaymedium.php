<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Gameplay Medium</title>

    <style>
        * {
            cursor: url('img/cursors/wonderWoman.gif'), default;
        }

        .fullImage {
            background-image: url(img/wonderWoman/wonder_woman.jpg);
        }

    </style>

</head>

<body>
    <main>
        <?php include ("logo.php"); ?>

        <div id="topSection">
            <ul id="timer">Time:
                <span id="minutes"></span>:<span id="seconds"></span>
            </ul>
        </div>

        <audio id="dropAudio">
            <source src="audio/iceCrunch.wav" type="audio/mpeg">
        </audio>

        <div class="board">

            <div class="puzzleBoard">
                <div class="fullImage">
                    <!--Allows me to add the background-->
                    <!--Puzzle Board Row Here-->
                    <div class="puzzleRow">
                        <div id="puzzle1" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_01.jpg" /></div>
                        <div id="puzzle2" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_02.jpg" /></div>
                        <div id="puzzle3" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_03.jpg" /></div>
                        <div id="puzzle4" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_04.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle5" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_05.jpg" /></div>
                        <div id="puzzle6" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_06.jpg" /></div>
                        <div id="puzzle7" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_07.jpg" /></div>
                        <div id="puzzle8" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_08.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle9" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_09.jpg" /></div>
                        <div id="puzzle10" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_10.jpg" /></div>
                        <div id="puzzle11" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_11.jpg" /></div>
                        <div id="puzzle12" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_12.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle13" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_13.jpg" /></div>
                        <div id="puzzle14" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_14.jpg" /></div>
                        <div id="puzzle15" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_15.jpg" /></div>
                        <div id="puzzle16" class="puzzle"><img src="img/wonderWoman/black_wonder_woman_16.jpg" /></div>
                    </div>
                </div>
            </div>

            <!--Pieces Row Here-->
            <div class="pieceBoard">
                <div class="piecesRow">
                    <div id="pieces16" class="puzzle"><img src="img/wonderWoman/wonder_woman_16.jpg" /></div>
                    <div id="pieces11" class="puzzle"><img src="img/wonderWoman/wonder_woman_11.jpg" /></div>
                    <div id="pieces8" class="puzzle"><img src="img/wonderWoman/wonder_woman_08.jpg" /></div>
                    <div id="pieces13" class="puzzle"><img src="img/wonderWoman/wonder_woman_13.jpg" /></div>


                    <div id="pieces4" class="puzzle"><img src="img/wonderWoman/wonder_woman_04.jpg" /></div>
                    <div id="pieces10" class="puzzle"><img src="img/wonderWoman/wonder_woman_10.jpg" /></div>
                    <div id="pieces5" class="puzzle"><img src="img/wonderWoman/wonder_woman_05.jpg" /></div>
                    <div id="pieces9" class="puzzle"><img src="img/wonderWoman/wonder_woman_09.jpg" /></div>

                    <div id="pieces14" class="puzzle"><img src="img/wonderWoman/wonder_woman_14.jpg" /></div>
                    <div id="pieces7" class="puzzle"><img src="img/wonderWoman/wonder_woman_07.jpg" /></div>
                    <div id="pieces2" class="puzzle"><img src="img/wonderWoman/wonder_woman_02.jpg" /></div>
                    <div id="pieces3" class="puzzle"><img src="img/wonderWoman/wonder_woman_03.jpg" /></div>


                    <div id="pieces1" class="puzzle"><img src="img/wonderWoman/wonder_woman_01.jpg" /></div>
                    <div id="pieces6" class="puzzle"><img src="img/wonderWoman/wonder_woman_06.jpg" /></div>
                    <div id="pieces15" class="puzzle"><img src="img/wonderWoman/wonder_woman_15.jpg" /></div>
                    <div id="pieces12" class="puzzle"><img src="img/wonderWoman/wonder_woman_12.jpg" /></div>

                </div>

            </div>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
    <script src="js/gameplayWonderWoman.js"></script>
</body>

</html>
