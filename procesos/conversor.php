<?php
header('Content-Type: text/html; charset=UTF-8');
require_once("../clases/conversor.php");

$resultado = "";

if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    $obj = new Conversor();
    $resultado = $obj->aBinario($numero);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Conversor</title>

    <link rel="stylesheet" href="/taller_php/CSS/estilos.css">
</head>
<body>

    <h2 class="resultado">Resultado en binario: <?php echo $resultado; ?></h2>

    <br>
    <a href="../paginas/conversor.html">Volver</a>

</body>
</html>