<?php
class Media {

    public function promedio($numeros) {
        return array_sum($numeros) / count($numeros);
    }

    public function media($numeros) {
        sort($numeros);
        $n = count($numeros);
        $mitad = floor($n / 2);

        if ($n % 2 == 0) {
            return ($numeros[$mitad - 1] + $numeros[$mitad]) / 2;
        } else {
            return $numeros[$mitad];
        }
    }

    public function moda($numeros) {

        // 👇 solución del error
        $numeros = array_map('strval', $numeros);

        $conteo = array_count_values($numeros);
        arsort($conteo);

        return array_key_first($conteo);
    }
}
?>