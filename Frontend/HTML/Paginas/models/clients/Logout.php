<?php
session_start();

session_unset();

session_destroy();

$_SESSION['mensaje'] = 'Sesión Finalizada :)';
$_SESSION['color_mensaje'] = 'warning';
header("Location: ../../../../../Frontend/HTML/Paginas/loginRegistro.php");
?>