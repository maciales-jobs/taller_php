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

    echo "<h2>Resultado: $resultado</h2>";
    echo "<br><a href='../paginas/calculadora.html'>Volver</a>";
}
?>