<?php
session_start();


if (isset($_SESSION['username']) && $_SESSION['username'] == 'estudiante') {
    echo "Bienvenido, Estudiante!";
    echo "<br><a href='logout.php'>Cerrar sesión</a>";
} else {
    
    header("Location: inicio.php");
    exit();
}
?>
