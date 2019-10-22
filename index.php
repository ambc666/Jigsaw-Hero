<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Home</title>
</head>

<body>
    <main>

        <div class="homepageLogoContainer">
            <div class="mainLogoHome"></div>
        </div>

        <div class="row1">
            <button type="button" id="btn" class="instruction" onclick="window.location='instructions.php'">INSTRUCTIONS</button>
        </div>

        <div class="row2">
            <button type="button" id="btn" class="playGame" onclick="window.location='choose_difficulty.php'">PLAY</button>
        </div>

        <div class="row3">
            <button type="button" id="btn" class="leaderBoard" onclick=".">Leaderboard - Coming Soon</button>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>

</html>
