<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Gameplay Easy</title>

    <style>
        * {
            cursor: url('/img/cursors/batman.gif'), default;
        }

        .fullImage {
            background-image: url(/img/batman/batmanFull.jpg);
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
            <!--Full Puzzle Container-->
            <div class="puzzleBoard">
                <div class="fullImage">
                    <!--Allows me to add the background-->
                    <!--Puzzle Board Row Here-->
                    <div class="puzzleRow">
                        <div id="puzzle1" class="puzzle"><img src="/img/batman/BlackBatman_01.jpg" /></div>
                        <div id="puzzle2" class="puzzle"><img src="/img/batman/BlackBatman_02.jpg" /></div>
                        <div id="puzzle3" class="puzzle"><img src="/img/batman/BlackBatman_03.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle4" class="puzzle"><img src="/img/batman/BlackBatman_04.jpg" /></div>
                        <div id="puzzle5" class="puzzle"><img src="/img/batman/BlackBatman_05.jpg" /></div>
                        <div id="puzzle6" class="puzzle"><img src="/img/batman/BlackBatman_06.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle7" class="puzzle"><img src="/img/batman/BlackBatman_07.jpg" /></div>
                        <div id="puzzle8" class="puzzle"><img src="/img/batman/BlackBatman_08.jpg" /></div>
                        <div id="puzzle9" class="puzzle"><img src="/img/batman/BlackBatman_09.jpg" /></div>
                    </div>
                </div>
            </div>

            <!--Pieces Row Here-->
            <div class="pieceBoard">
                <div class="piecesRow">
                    <div id="pieces8" class="puzzle"><img src="/img/batman/Batman_08.jpg" /></div>
                    <div id="pieces2" class="puzzle"><img src="/img/batman/Batman_02.jpg" /></div>
                    <div id="pieces4" class="puzzle"><img src="/img/batman/Batman_04.jpg" /></div>

                    <div id="pieces9" class="puzzle"><img src="/img/batman/Batman_09.jpg" /></div>
                    <div id="pieces3" class="puzzle"><img src="/img/batman/Batman_03.jpg" /></div>
                    <div id="pieces6" class="puzzle"><img src="/img/batman/Batman_06.jpg" /></div>

                    <div id="pieces7" class="puzzle"><img src="/img/batman/Batman_07.jpg" /></div>
                    <div id="pieces1" class="puzzle"><img src="/img/batman/Batman_01.jpg" /></div>
                    <div id="pieces5" class="puzzle"><img src="/img/batman/Batman_05.jpg" /></div>
                </div>
            </div>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
    <script src="js/gameplayBatman.js"></script>
</body>

</html>
