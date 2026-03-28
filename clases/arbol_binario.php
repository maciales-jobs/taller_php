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

        return $this->postorden($nodo->izq) .
               $this->postorden($nodo->der) .
               $nodo->valor . " ";
    }
}
?>