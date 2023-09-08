<?php
session_start();

if($_SESSION['usuario'] === null){
    header("Location: ../index.php");
}

$opcion = $_POST['opcion'];
$tipo_poliza = $_POST['tipo_poliza'];
$Cobertura = $_POST['Cobertura'];
$Fecha_inicio = $_POST['Fecha_inicio'];
$costo = $_POST['costo'];


include '../Data/Conexion.php';

if ($opcion == 1) {
    $query = "INSERT INTO Poliza (id_poliza,tipo_poliza,Cobertura,Fecha_inicio,costo) VALUES(NULL,'$tipo_poliza','$Cobertura','$Fecha_inicio','$costo')";
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {
        header("Location: ../View/AgregarPoliza.php");
        exit;
    } else {
        header("Location: ./Poliza.php");
        exit;
    }
} else if ($opcion == 2) {
    $id_poliza = $_POST['id_poliza'];
    $query = "UPDATE Poliza SET  tipo_poliza='$tipo_poliza', Cobertura='$Cobertura', Fecha_inicio ='$Fecha_inicio', costo='$costo' WHERE id_poliza='$id_poliza'";
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {
        header("Location: ../View/Poliza.php");
        exit;
    } else {
        header("Location: ./Poliza.php");
        exit;
    }
} else {
    $id_poliza = $_GET['id_poliza'];
    $query = "DELETE FROM Poliza WHERE id_poliza ='$id_poliza'";
    $ejecutar = mysqli_query($conexion, $query);
    if ($ejecutar) {
        header("Location: ../View/Poliza.php");
        exit;
    } else {
        header("Location: ./Poliza.php");
        exit;
    }
}
