<?php
class Acronimo {

    public function generar($frase) {
        $frase = preg_replace("/[^a-zA-Z\s-]/", "", $frase);

        $frase = str_replace("-", " ", $frase);

        $palabras = explode(" ", $frase);

        $resultado = "";

        foreach ($palabras as $p) {
            if (!empty($p)) {
                $resultado .= strtoupper($p[0]);
            }
        }

        return $resultado;
    }
}
?>