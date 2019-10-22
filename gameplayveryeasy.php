<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Gameplay Very Easy</title>

    <style>
        * {
            cursor: url('img/cursors/flash.gif'), default;
        }

        .fullImage {
            background-image: url(img/flash/flash.jpg);
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
                        <div id="puzzle1" class="puzzle"><img src="img/flash/black_flash_01.jpg" /></div>
                        <div id="puzzle2" class="puzzle"><img src="img/flash/black_flash_02.jpg" /></div>
                    </div>

                    <div class="puzzleRow">
                        <div id="puzzle3" class="puzzle"><img src="img/flash/black_flash_03.jpg" /></div>
                        <div id="puzzle4" class="puzzle"><img src="img/flash/black_flash_04.jpg" /></div>
                    </div>
                </div>
            </div>

            <!--Pieces Row Here-->
            <div class="pieceBoard">
                <div class="piecesRow">
                    <div id="pieces4" class="puzzle"><img src="img/flash/flash_04.jpg" /></div>
                    <div id="pieces3" class="puzzle"><img src="img/flash/flash_03.jpg" /></div>

                    <div id="pieces1" class="puzzle"><img src="img/flash/flash_01.jpg" /></div>
                    <div id="pieces2" class="puzzle"><img src="img/flash/flash_02.jpg" /></div>

                </div>

            </div>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
    <script src="js/gameplayFlash.js"></script>
</body>

</html>
