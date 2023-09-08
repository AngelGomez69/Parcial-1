<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.html');
    exit();
}

$usuario = $_SESSION['usuario'];

if ($usuario['rol'] === 'ADMINISTRADOR') {
    session_destroy();
    header('Location: /front/index.php');
    exit();
} elseif ($usuario['rol'] === 'RUSTICO') {
    session_destroy();
    header('Location: /front/index.php');
    exit();
} else {
    header("Cache-Control: no-cache, must-revalidate");
    header('Location: /front/index.php');
    exit();
}
?>







