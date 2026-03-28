<?php

require_once("../clases/conjuntos.php");

if (isset($_POST['A']) && isset($_POST['B'])) {

    $A = array_map('intval', explode(",", $_POST['A']));
    $B = array_map('intval', explode(",", $_POST['B']));

    $obj = new Conjuntos();

    $union = $obj->union($A, $B);
    $interseccion = $obj->interseccion($A, $B);
    $difAB = $obj->diferenciaAB($A, $B);
    $difBA = $obj->diferenciaBA($A, $B);

    echo "<h2>Resultados:</h2>";

    echo "Unión: " . implode(", ", $union) . "<br>";
    echo "Intersección: " . implode(", ", $interseccion) . "<br>";
    echo "A - B: " . implode(", ", $difAB) . "<br>";
    echo "B - A: " . implode(", ", $difBA) . "<br>";

    echo "<br><a href='../paginas/conjuntos.html'>Volver</a>";
}
?>