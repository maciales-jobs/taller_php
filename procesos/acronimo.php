<?php
require_once("../clases/acronimo.php");

if (isset($_POST['frase'])) {

    $frase = $_POST['frase'];

    $obj = new Acronimo();
    $resultado = $obj->generar($frase);

    echo "<h2>Resultado: $resultado</h2>";
    echo "<br><a href='../paginas/acronimo.html'>Volver</a>";
}
?>