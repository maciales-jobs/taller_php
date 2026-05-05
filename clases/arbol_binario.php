<?php
class Nodo {
    public $valor;
    public $izq;
    public $der;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izq = null;
        $this->der = null;
    }
}

class ArbolBinario {

    public function construir($preorden, $inorden) {
        if (count($preorden) == 0 || count($inorden) == 0) {
            return null;
        }

        $raizValor = $preorden[0];
        $raiz = new Nodo($raizValor);

        $indice = array_search($raizValor, $inorden);

        $inIzq = array_slice($inorden, 0, $indice);
        $inDer = array_slice($inorden, $indice + 1);

        $preIzq = array_slice($preorden, 1, count($inIzq));
        $preDer = array_slice($preorden, 1 + count($inIzq));

        $raiz->izq = $this->construir($preIzq, $inIzq);
        $raiz->der = $this->construir($preDer, $inDer);

        return $raiz;
    }

    public function postorden($nodo) {
        if ($nodo == null) return "";

        $izq = $this->postorden($nodo->izq);
        $der = $this->postorden($nodo->der);

        return trim($izq . " " . $der . " " . $nodo->valor);
    }

    public function mostrar($nodo, $nivel = 0) {
        if ($nodo == null) return "";

        $espacios = str_repeat("&nbsp;&nbsp;&nbsp;", $nivel);
        $salida = $espacios . $nodo->valor . "<br>";

        $salida .= $this->mostrar($nodo->izq, $nivel + 1);
        $salida .= $this->mostrar($nodo->der, $nivel + 1);

        return $salida;
    }
}
?>
