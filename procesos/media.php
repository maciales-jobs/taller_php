<?php

require_once("../clases/media.php");

if (isset($_POST['numeros'])) {

    $entrada = $_POST['numeros'];

    $numeros = array_map('floatval', explode(",", $entrada));

    $obj = new Media();

    $promedio = $obj->promedio($numeros);
    $media = $obj->media($numeros);
    $moda = $obj->moda($numeros);

    echo "<h2>Resultados:</h2>";
    echo "Promedio: $promedio <br>";
    echo "Media: $media <br>";
    echo "Moda: $moda <br>";

    echo "<br><a href='../paginas/media.html'>Volver</a>";
}
?>