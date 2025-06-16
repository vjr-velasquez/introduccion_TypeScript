<?php
class PerfectNumber {
    private $num1;
    private $resultado;

    public function __construct($num1) {
        $this->num1 = $num1;
        $this->calcularPerfecto();
    }

    private function calcularPerfecto() {
        $sum = 0;
        for ($i = 1; $i < $this->num1; $i++) {
            if ($this->num1 % $i == 0) {
                $sum += $i;
            }
        }
        $this->resultado = ($sum == $this->num1) ? "El número {$this->num1} es perfecto." : "El número {$this->num1} no es perfecto.";
    }

    public function getResultado() {
        return $this->resultado;
    }
}
?>