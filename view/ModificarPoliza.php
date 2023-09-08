<?php

session_start();

if ($_SESSION['usuario'] === null) {
    header("Location: ../index.php");
}

include '../Data/Conexion.php';

$id_poliza = $_GET['id'];

$query = "SELECT * FROM Poliza WHERE id_poliza = '$id_poliza'";
$ejecucion = mysqli_query($conexion, $query);
$fila = mysqli_fetch_assoc($ejecucion);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/font/css/all.css">
    <title>Modificar Poliza</title>
</head>

<body>
    <h2 class="text-center"><i class="fas fa-file-pen"></i>&nbsp;Modificar Poliza</h2>
    <form action="../Controller/Poliza.php" method="POST">
        <input type="text" name="opcion" value="2" hidden>
        <input type="text" name="id_poliza" value="<?php echo $fila['id_poliza']; ?>" required hidden>

        <div class="form-group">
            <label for="tipo_poliza">Tipo Poliza</label>
            <input type="text" class="form-control" id="tipo_poliza" name="tipo_poliza" placeholder="tipo_poliza" value="<?php echo $fila['tipo_poliza']; ?>" required>
        </div>

        <div class="form-group">
            <label for="Cobertura">Cobertura</label>
            <input type="text" class="form-control" id="Cobertura" name="Cobertura" placeholder="Cobertura" value="<?php echo $fila['Cobertura']; ?>" required>
        </div>

        <div class="form-group">
            <label for="Fecha_inicio">Fecha de Inicio</label>
            <input type="date" class="form-control" id="Fecha_inicio" name="Fecha_inicio" placeholder="Fecha_inicio" value="<?php echo $fila['Fecha_inicio']; ?>" required>
        </div>

        <div class="form-group">
            <label for="costo">Costo</label>
            <input type="text" class="form-control" id="costo" name="costo" placeholder="costo" value="<?php echo $fila['costo']; ?>" required>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-warning mr-3">
                <i class="fas fa-pen-to-square"></i> Modificar
            </button>
            <a href="./Poliza.php" class="btn btn-danger"><i class="fas fa-reply"></i>&nbsp;Cancelar</a>
        </div>
    </form>
</body>

</html>