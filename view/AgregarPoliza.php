<?php
session_start();

if ($_SESSION['usuario'] === null) {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/font/css/all.css">
    <title>Insertar Poliza</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center"><i class="fas fa-list"></i>&nbsp;Formulario</h2>
        <form action="../Controller/Poliza.php" method="POST">
            <input type="text" hidden value="1" name="opcion">
            <div class="form-group">
                <label for="tipo_poliza">Tipo de Poliza</label>
                <input type="text" class="form-control" id="tipo_poliza" name="tipo_poliza">
            </div>
            <div class="form-group">
                <label for="Cobertura">Cobertura</label>
                <input type="text" class="form-control" id="Cobertura" name="Cobertura">
            </div>
            <div class="form-group">
                <label for="Fecha_inicio">Fecha de Inicio</label>
                <input type="date" class="form-control" id="Fecha_inicio" name="Fecha_inicio">
            </div>
            <div class="form-group">
                <label for="costo">Costo</label>
                <input type="text" class="form-control" id="costo" name="costo">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success mr-3">
                    <i class="fas fa-save"></i> Guardar
                </button>
                <a href="./Poliza.php" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>