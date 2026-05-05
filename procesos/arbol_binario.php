<?php
require_once("../clases/arbol_binario.php");

if (!empty($_POST['preorden']) && !empty($_POST['inorden'])) {
    $preorden = array_map('trim', explode(",", $_POST['preorden']));
    $inorden = array_map('trim', explode(",", $_POST['inorden']));

    $obj = new ArbolBinario();
    $raiz = $obj->construir($preorden, $inorden);
    $resultado = $obj->postorden($raiz);
    $estructura = $obj->mostrar($raiz);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Árbol Binario</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>
    <?php if (!empty($resultado)) { ?>
        <h2>Árbol construido correctamente</h2>
        <p>Postorden generado: <?php echo $resultado; ?></p>
        <h3>Estructura del árbol:</h3>
        <div><?php echo $estructura; ?></div>
    <?php } else { ?>
        <h2>Error: debes ingresar Preorden e Inorden</h2>
    <?php } ?>
    <br>
    <a href="../paginas/arbol_binario.html">Volver</a>
</body>
</html>
