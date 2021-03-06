<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Sylhare" name="author">
    <meta content="Basic Minesweeper game in Javascript" name="description">
    <meta content="https://github.com/Sylhare/Minesweeper" name="link">

    <title>Prato Fiorito</title>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>

    <script defer src="js/Sketch.js" type="text/javascript"></script>
    <script src="js/Zone.js" type="text/javascript"></script>
    <script src="js/Board.js" type="text/javascript"></script>
    <script src="js/Explosion.js" type="text/javascript"></script>
    <script src="js/Timer.js" type="text/javascript"></script>

</head>

<body>

<div class="flex-parent" id="page">
    <h1 class="title" style="color:white">Prato fiorito ufficiale cambiaclima</h1>

    <!-- navigation panel -->
    <div class="flex-nav-container" id="nav">
        <div class="item-1">
            <div id="game-info">
                <img alt="mine" id="mine-img" src="img/flame.png">
                <!-- <span id="mines" class="info">8</span> -->
            </div>
            <div class="timer menu">
                <p style="color:white">Tempo</p>
                <timer id="timer">00:00</timer>
            </div>
        </div>

        <div class="separator"></div>
        <div style="color:white">
            <div class="menu" onclick="show('minesweeper-game');"><a class="button">Gioca</a></div>
            <!-- <div class="menu" onclick="show('settings');"><a class="button">Impostazioni</a></div> -->
            <div class="menu" onclick="show('info');"><a class="button"> Info </a></div>
        </div>
    </div>

    <!-- Minesweeper game  -->
    <div class="container flex-container">
        <!-- <div class="content" id="settings" style="display: none;">
            <h2>Settings</h2>
            <p>
                You can configure the minesweeper here. Once you've changed the parameters go back to the
                <a onclick="show('minesweeper-game');">game</a> to test it!</p>

            <h3> Mine Density </h3>
            <p> Change the amount of mine (i.e. the density) in the board. </p>
            <div class="slide-container">
                <p>Low</p>
                <input class="slider" id="density-setting" max="100" min="1" type="range" value="50">
                <p>High</p>
            </div>

            <h3> Board size </h3>
            <p> You can change the board size, the number of zone within the board. </p>
            <div class="slide-container">
                <p>Small</p>
                <input class="slider" id="size-setting" max="100" min="1" type="range" value="50">
                <p>Big</p>
            </div>

        </div> -->
        <div class="content" id="info" style="display: none; color:white">
            <h2>Info</h2>

            <p>Gioca a prato fiorito, vinci svelando tutte le caselle che non contengono una fiamma.</p>
            <ul>
                <li>Se clicchi su una fiamma <img alt="mine" class="img-info" src="./img/flame.png"> hai perso</li>
                <li>Puoi contrassegnare <img alt="flag" class="img-info" src="./img/tree.png"> le caselle del tabellone facendo clic con il pulsante destro
                </li>
                <li>Il numero della casella <img alt="zone" class="img-info" src="./img/zone.png"> indica il numero di fiamme nelle vicinanze
                </li>
            </ul>
        </div>
        <div id="minesweeper-game">

            <!-- Custom Alert -->
            <div id="alertContainer">
                <div class="center" id="alertBox">
                    <!--<h1 id="customAlert-title" class="">Alert</h1>-->
                    <p id="customAlert-content">message</p>
                    <a class="button" href="#" onclick="removeAlert()">Ok</a>
                </div>
            </div>

            <!-- Game canvas -->
            <div class="" id="game"></div>

        </div>
    </div>
    <div id="footer"></div>
</div>
</body>

</html>
