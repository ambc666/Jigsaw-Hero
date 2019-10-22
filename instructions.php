<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Play - Difficulties</title>

    <style>
        .homeButton{
        margin-left: 20px;
    }
    </style>
</head>

<body>
    <main>

        <?php include ("logo.php"); ?>

        <div id="topSection">
            <ul id="timer">
                <span id="minutes"></span><span id="seconds"></span>
            </ul>
        </div>
        <!--This is so my logo doesnt break and need more css -->

        <div class="instructionsContainer">
            <div class="instructionsBox">
                <p>1. CLICK AND HOLD AN IMAGE ON THE RIGHT AND DRAG IT TO THE LEFT
                    <br> 2. MATCH WHERE IT SHOULD GO ON THE LEFT HAND SIDE OF THE SCREEN.
                    <br>3. COMPLETE THE PUZZLE.
                    <br>4. THE FASTER IT IS COMPLETED THE BETTER YOUR TIME IN THE LEADERBOARD.
                    <br>
                    <br>NOTE. LEADERBOARD IS COMING SOON AND NOT YET ACTIVE.
                    <br>TIME IS STILL SHOWN ON COMPLETION OF PUZZLE.</p>
            </div>
        </div>

        <div class="row4">
            <button type="button" id="btn" class="playGame" onclick="window.location='choose_difficulty.php'">PLAY</button>
            <button type="button" id="btn" class="homeButton" onclick="window.location='index.php'">HOME</button>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>

</html>
