<?php

require_once("../clases/matematicas.php");

if (isset($_POST['numero']) && isset($_POST['operacion'])) {

    $numero = $_POST['numero'];
    $operacion = $_POST['operacion'];

    $obj = new Matematicas();

    if ($operacion == "fibonacci") {

        $resultado = $obj->fibonacci($numero);

        echo "<h2>Serie Fibonacci:</h2>";
        echo implode(", ", $resultado);

    } else {

        $resultado = $obj->factorial($numero);

        echo "<h2>Factorial: $resultado</h2>";
    }

    echo "<br><br><a href='../paginas/matematicas.html'>Volver</a>";
}
?>