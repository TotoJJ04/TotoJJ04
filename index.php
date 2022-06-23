

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tic tac toe</title>
</head>
<body>
<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Challenge Game on!</h1>
        <h2>NAMEN IN DE VAKEN</h2>

        <div class="player-name">
            <label for="player-x">Speler 1 (X)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="player-name">
            <label for="player-o">Speler 2 (O)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Start</button>
    </div>
</form>
</body>
</html>
<?php
require_once "header.php";
?>




