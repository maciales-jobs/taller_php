<?php
class Calculadora {

    public function suma($a, $b) {
        return $a + $b;
    }

    public function resta($a, $b) {
        return $a - $b;
    }

    public function multiplicacion($a, $b) {
        return $a * $b;
    }

    public function division($a, $b) {
        if ($b == 0) {
            return "Error: división por cero";
        }
        return $a / $b;
    }
}
?>