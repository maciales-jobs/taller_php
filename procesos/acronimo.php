<?php
require_once("../clases/acronimo.php");

if (isset($_POST['frase'])) {

    $frase = $_POST['frase'];

    $obj = new Acronimo();
    $resultado = $obj->generar($frase);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Acrónimo</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>
    <h2 class="resultado">Resultado: <?php echo $resultado; ?></h2>
    <br>
    <a href="../paginas/acronimo.html">Volver</a>
</body>
</html>