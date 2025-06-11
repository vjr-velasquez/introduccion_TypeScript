
<?php
class Texto_invertido {
    private $texto;
    private $resultado;

    public function __construct($texto) {
        $this->texto = $texto;
        $this->invertir();
    }

    private function invertir() {
        $this->resultado = strrev($this->texto);
    }

    public function getResultado() {
        return $this->resultado;
    }
}
?>