<?php
class Factorial {
    private $num1;
    private $resultado;

    public function __construct($num1) {
        $this->numero = $num1;
        $this->calcularFactorial();
    }

    private function calcularFactorial() {
        if ($this->numero < 0) {
            $this->resultado = "No se puede calcular el factorial de un número negativo.";
            return;
        }
        $this->resultado = 1;
        for ($i = 1; $i <= $this->numero; $i++) {
            $this->resultado *= $i;
        }
    }

    public function getResultado() {
        return $this->resultado;
    }
}
?>