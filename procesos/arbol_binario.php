<?php

require_once("../clases/arbol_binario.php");

if (!empty($_POST['preorden']) && !empty($_POST['inorden'])) {

    $preorden = array_map('trim', explode(",", $_POST['preorden']));
    $inorden = array_map('trim', explode(",", $_POST['inorden']));

    $obj = new ArbolBinario();

    $raiz = $obj->construir($preorden, $inorden);

    $resultado = $obj->postorden($raiz);

    echo "<h2>Árbol construido correctamente</h2>";
    echo "<p>Postorden generado: $resultado</p>";

} else {
    echo "<h2>Error: debes ingresar Preorden e Inorden</h2>";
}

echo "<br><a href='../paginas/arbol_binario.html'>Volver</a>";
?>