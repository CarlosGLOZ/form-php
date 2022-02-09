<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>
<body>
    <!-- Comprobar que se viene de otra pantalla -->
    <?php
    session_start();
        if ($_SESSION["pantalla1"]!='check') {
            header("Location: ../index.php");
        }
    ?>
    
    <!-- Formulario -->
    <h1>Pantalla 1 - PIKACHU</h1>
    <form action="../proc/res.proc.php" method="post">
        <input type="text" name="pokemon" placeholder="Inserte pokemon...">
        <input type="submit" name="pantalla1">
    </form>

    <!-- Escribir mensaje de ayuda -->
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">Intenta con el pokemon #'.$_GET['msg'].'</p>';
    }
    ?>
    <br>

    <!-- pikachu :) -->
    <img src="../img/pikachu.gif" alt="">
</body>
</html>