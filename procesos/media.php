<?php
require_once("../clases/media.php");

if (isset($_POST['numeros'])) {
    $entrada = $_POST['numeros'];
    $numeros = array_map('floatval', explode(",", $entrada));

    $obj = new Media();

    $promedio = $obj->promedio($numeros);
    $media = $obj->media($numeros);
    $moda = $obj->moda($numeros);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Media</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>
    <?php if (isset($promedio)) { ?>
        <h2 class="resultado">Resultados:</h2>
        <p>Promedio: <?php echo $promedio; ?></p>
        <p>Mediana: <?php echo $media; ?></p>
        <p>Moda: <?php echo $moda; ?></p>
    <?php } else { ?>
        <h2 class="error">Error: debes ingresar los números</h2>
    <?php } ?>
    <br>
    <a href="../paginas/media.html">Volver</a>
</body>
</html>
