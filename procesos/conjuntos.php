<?php
require_once("../clases/conjuntos.php");

if (isset($_POST['A']) && isset($_POST['B'])) {
    $A = array_map('trim', explode(",", $_POST['A']));
    $B = array_map('trim', explode(",", $_POST['B']));

    $obj = new Conjuntos();

    $union = $obj->union($A, $B);
    $interseccion = $obj->interseccion($A, $B);
    $difAB = $obj->diferenciaAB($A, $B);
    $difBA = $obj->diferenciaBA($A, $B);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Conjuntos</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>
    <?php if (isset($union)) { ?>
        <h2 class="resultado">Resultados:</h2>
        <p>Unión: <?php echo implode(", ", $union); ?></p>
        <p>Intersección: <?php echo implode(", ", $interseccion); ?></p>
        <p>A - B: <?php echo implode(", ", $difAB); ?></p>
        <p>B - A: <?php echo implode(", ", $difBA); ?></p>
    <?php } else { ?>
        <h2 class="error">Error: debes ingresar los conjuntos A y B</h2>
    <?php } ?>
    <br>
    <a href="../paginas/conjuntos.html">Volver</a>
</body>
</html>
