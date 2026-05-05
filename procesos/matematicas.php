<?php
require_once("../clases/matematicas.php");

if (isset($_POST['numero']) && isset($_POST['operacion'])) {
    $numero = $_POST['numero'];
    $operacion = $_POST['operacion'];

    $obj = new Matematicas();

    if ($operacion == "fibonacci") {
        $resultado = $obj->fibonacci($numero);
        $titulo = "Serie Fibonacci:";
        $salida = implode(", ", $resultado);
    } else {
        $resultado = $obj->factorial($numero);
        $titulo = "Factorial:";
        $salida = $resultado;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Matemáticas</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>
    <?php if (!empty($salida)) { ?>
        <h2 class="resultado"><?php echo $titulo; ?></h2>
        <p><?php echo $salida; ?></p>
    <?php } else { ?>
        <h2 class="error">Error: debes ingresar un número y seleccionar una operación</h2>
    <?php } ?>
    <br>
    <a href="../paginas/matematicas.html">Volver</a>
</body>
</html>
