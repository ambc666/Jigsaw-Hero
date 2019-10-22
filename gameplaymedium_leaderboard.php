<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Coming Soon</title>
    <style>
        * {
            cursor: url('img/cursors/wonderWoman.gif'), default;
        }

        .leaderImg {
            background-image: url(img/wonderWoman/wonder_woman.jpg);
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
            <button type="button" id="btn" class="nextLvl" onclick="window.location='gameplayhard.php'">Next Puzzle</button>
            <button type="button" class="factToggle" onclick="wonderWomanFacts()">Wonder Woman Facts</button>
        </div>

        <div class="factContainer">
            <div class="wonderWomanFacts">
                <p class="factText" id="wonderWomanFact1"></p>
                <p class="factText" id="wonderWomanFact2"></p>
                <p class="factText" id="wonderWomanFact3"></p>
            </div>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>

</html>
