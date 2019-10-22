<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Jigsaw Hero - Play - Difficulties</title>
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

        <div class="difficultySelection">
            <div>
                <img class="imgDifficulties" src="/img/flash/flash.jpg">
                <button type="button" id="btn" class="veryEasyMode" onclick="window.location='gameplayveryeasy.php'">VERY EASY</button>
            </div>

            <div>
                <img class="imgDifficulties" src="/img/batman/batmanFull.jpg">
                <button type="button" id="btn" class="easyMode" onclick="window.location='gameplayeasy.php'">EASY</button>
            </div>

            <div>
                <img class="imgDifficulties" src="/img/wonderWoman/wonder_woman.jpg">
                <button type="button" id="btn" class="mediumMode" onclick="window.location='gameplaymedium.php'">MEDIUM</button>
            </div>

            <div>
                <img class="imgDifficulties" src="/img/superman/superman.jpg">
                <button type="button" id="btn" class="hardMode" onclick="window.location='gameplayhard.php'">HARD</button>
            </div>

        </div>

        <div class="row4">
            <button type="button" id="btn" class="homeButton" onclick="window.location='index.php'">HOME</button>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>

</html>
