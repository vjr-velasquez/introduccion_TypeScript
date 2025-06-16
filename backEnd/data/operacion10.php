<?php
class cantVocales {
    private $texto;
    private $resultado;

    public function __construct($texto) {
        $this->texto = $texto;
        $this->calcularVocales();
    }

    private function calcularVocales() {
        $vocales = preg_match_all('/[aeiouAEIOU]/', $this->texto, $matches);
        $this->resultado = "El texto contiene {$vocales} vocal(es).";
    }

    public function getResultado() {
        return $this->resultado;
    }
}
?>
