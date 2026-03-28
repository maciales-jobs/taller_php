<?php
header('Content-Type: text/html; charset=UTF-8');

require_once("../clases/conversor.php");

if (isset($_POST['numero'])) {

    $numero = $_POST['numero'];

    $obj = new Conversor();
    $resultado = $obj->aBinario($numero);

    echo "<h2>Resultado en binario: $resultado</h2>";

    echo "<br><a href='../paginas/conversor.html'>Volver</a>";
}
?>