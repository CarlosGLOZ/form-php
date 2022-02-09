<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Pantalla 2 - CHARMANDER</h1>

    <!-- Compruebo si se viene de pantalla1 -->
    <?php
    session_start();
        if ($_SESSION["pantalla2"]!='check') {
            header("Location: ../index.php");
        }
    ?>

    <!-- Charmander :) -->
    <br>
    <img src="../img/charmander.gif" alt="">
    <br>
    <a href="../proc/replay.proc.php">volver a jugar :)</a>
</body>
</html>