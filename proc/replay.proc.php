<?php
session_start();
    if ($_SESSION['pantalla2']=='check') {
        session_destroy();
        header('Location: ../index.php');
    }
    else {
        header('Location: ../view/pantalla2.php');
    }
?>