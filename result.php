<?php
require_once "header.php";

if (! playersRegistered()) {
    header("location: index.php");
}

resetBoard();
?>

<table class="wrapper" cellpadding="0" cellspacing="0">
    <tr>
        <td>

            <div class="welcome">

                <h1>
                    <?php
                    if ($_GET['player']) {
                        echo currentPlayer() . "Heeft Gewonnen!";
                    }
                    else {
                        echo "Gelijkspel";
                    }
                    ?>
                </h1>

                <div class="player-name">
                    <?php echo playerName('x')?>'score: <b><?php echo score('x')?></b>
                </div>

                <div class="player-name">
                    <?php echo playerName('o')?>'score: <b><?php echo score('o')?></b>
                </div>

                <a href="play.php">Speel Opnieuw</a><br />

                <a href="index.php" class="reset-btn">Reset</a>
            </div>

        </td>
    </tr>
</table>

</body>
</html>

