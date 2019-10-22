<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Gameplay Hard</title>
    <style>
        * {
            cursor: url('img/cursors/superman.gif'), default;
        }

        .fullImage {
            background-image: url(img/superman/superman.jpg);
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
                        <div id="puzzle1" class="puzzle"><img src="img/superman/black_superman_01.jpg" /></div>
                        <div id="puzzle2" class="puzzle"><img src="img/superman/black_superman_02.jpg" /></div>
                        <div id="puzzle3" class="puzzle"><img src="img/superman/black_superman_03.jpg" /></div>
                        <div id="puzzle4" class="puzzle"><img src="img/superman/black_superman_04.jpg" /></div>
                        <div id="puzzle5" class="puzzle"><img src="img/superman/black_superman_05.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle6" class="puzzle"><img src="img/superman/black_superman_06.jpg" /></div>
                        <div id="puzzle7" class="puzzle"><img src="img/superman/black_superman_07.jpg" /></div>
                        <div id="puzzle8" class="puzzle"><img src="img/superman/black_superman_08.jpg" /></div>
                        <div id="puzzle9" class="puzzle"><img src="img/superman/black_superman_09.jpg" /></div>
                        <div id="puzzle10" class="puzzle"><img src="img/superman/black_superman_10.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle11" class="puzzle"><img src="img/superman/black_superman_11.jpg" /></div>
                        <div id="puzzle12" class="puzzle"><img src="img/superman/black_superman_12.jpg" /></div>
                        <div id="puzzle13" class="puzzle"><img src="img/superman/black_superman_13.jpg" /></div>
                        <div id="puzzle14" class="puzzle"><img src="img/superman/black_superman_14.jpg" /></div>
                        <div id="puzzle15" class="puzzle"><img src="img/superman/black_superman_15.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle16" class="puzzle"><img src="img/superman/black_superman_16.jpg" /></div>
                        <div id="puzzle17" class="puzzle"><img src="img/superman/black_superman_17.jpg" /></div>
                        <div id="puzzle18" class="puzzle"><img src="img/superman/black_superman_18.jpg" /></div>
                        <div id="puzzle19" class="puzzle"><img src="img/superman/black_superman_19.jpg" /></div>
                        <div id="puzzle20" class="puzzle"><img src="img/superman/black_superman_20.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle21" class="puzzle"><img src="img/superman/black_superman_21.jpg" /></div>
                        <div id="puzzle22" class="puzzle"><img src="img/superman/black_superman_22.jpg" /></div>
                        <div id="puzzle23" class="puzzle"><img src="img/superman/black_superman_23.jpg" /></div>
                        <div id="puzzle24" class="puzzle"><img src="img/superman/black_superman_24.jpg" /></div>
                        <div id="puzzle25" class="puzzle"><img src="img/superman/black_superman_25.jpg" /></div>
                    </div>
                </div>
            </div>

            <!--Pieces Row Here-->
            <div class="pieceBoard">
                <div class="piecesRow">
                    <div id="pieces5" class="puzzle"><img src="img/superman/superman_05.jpg" /></div>
                    <div id="pieces11" class="puzzle"><img src="img/superman/superman_11.jpg" /></div>
                    <div id="pieces4" class="puzzle"><img src="img/superman/superman_04.jpg" /></div>
                    <div id="pieces20" class="puzzle"><img src="img/superman/superman_20.jpg" /></div>

                    <div id="pieces1" class="puzzle"><img src="img/superman/superman_01.jpg" /></div>
                    <div id="pieces6" class="puzzle"><img src="img/superman/superman_06.jpg" /></div>
                    <div id="pieces19" class="puzzle"><img src="img/superman/superman_19.jpg" /></div>
                    <div id="pieces15" class="puzzle"><img src="img/superman/superman_15.jpg" /></div>

                    <div id="pieces10" class="puzzle"><img src="img/superman/superman_10.jpg" /></div>
                    <div id="pieces7" class="puzzle"><img src="img/superman/superman_07.jpg" /></div>
                    <div id="pieces24" class="puzzle"><img src="img/superman/superman_24.jpg" /></div>
                    <div id="pieces12" class="puzzle"><img src="img/superman/superman_12.jpg" /></div>

                    <div id="pieces3" class="puzzle"><img src="img/superman/superman_03.jpg" /></div>
                    <div id="pieces13" class="puzzle"><img src="img/superman/superman_13.jpg" /></div>
                    <div id="pieces22" class="puzzle"><img src="img/superman/superman_22.jpg" /></div>
                    <div id="pieces9" class="puzzle"><img src="img/superman/superman_09.jpg" /></div>

                    <div id="pieces16" class="puzzle"><img src="img/superman/superman_16.jpg" /></div>
                    <div id="pieces25" class="puzzle"><img src="img/superman/superman_25.jpg" /></div>
                    <div id="pieces17" class="puzzle"><img src="img/superman/superman_17.jpg" /></div>
                    <div id="pieces14" class="puzzle"><img src="img/superman/superman_14.jpg" /></div>

                    <div id="pieces18" class="puzzle"><img src="img/superman/superman_18.jpg" /></div>
                    <div id="pieces2" class="puzzle"><img src="img/superman/superman_02.jpg" /></div>
                    <div id="pieces21" class="puzzle"><img src="img/superman/superman_21.jpg" /></div>
                    <div id="pieces8" class="puzzle"><img src="img/superman/superman_08.jpg" /></div>
                    <div id="pieces23" class="puzzle"><img src="img/superman/superman_23.jpg" /></div>
                </div>
            </div>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
    <script src="js/gameplaySuperman.js"></script>
</body>

</html>
