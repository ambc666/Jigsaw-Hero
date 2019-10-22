<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Coming Soon</title>

    <style>
        * {
            cursor: url('img/cursors/flash.gif'), default;
        }

        .leaderImg {
            background-image: url(img/flash/flash.jpg);
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

        <div class="comingSoonContainer">
            <div class="comingSoonText"></div>
        </div>

        <div class="leaderboardContainer">
            <div class="leaderImg"></div>
        </div>

        <div class="row5">
            <button type="button" id="btn" class="homeButton" onclick="window.location='index.php'">HOME</button>
            <button type="button" id="btn" class="nextLvl" onclick="window.location='gameplayeasy.php'">Next Puzzle</button>
            <button type="button" class="factToggle" onclick="flashFacts()">Flash Facts</button>
        </div>

        <div class="factContainer">
            <div class="flashFacts">
                <p class="factText" id="flashFact1"></p>
                <p class="factText" id="flashFact2"></p>
                <p class="factText" id="flashFact3"></p>
            </div>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>

</html>
