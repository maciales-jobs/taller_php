<?php
require_once("../clases/calculadora.php");

if (isset($_POST['num1'], $_POST['num2'], $_POST['operacion'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operacion'];

    $calc = new Calculadora();

    if ($op == "suma") {
        $resultado = $calc->suma($a, $b);
    } elseif ($op == "resta") {
        $resultado = $calc->resta($a, $b);
    } elseif ($op == "multiplicacion") {
        $resultado = $calc->multiplicacion($a, $b);
    } else {
        $resultado = $calc->division($a, $b);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Calculadora</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>
    <h2 class="resultado">Resultado: <?php echo $resultado; ?></h2>
    <br>
    <a href="../paginas/calculadora.html">Volver</a>
</body>
</html>
