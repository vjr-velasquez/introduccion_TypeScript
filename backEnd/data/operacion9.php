<?php
class NumeroPrimo {
    private $num1;
    private $resultado;

    public function __construct($num1) {
        $this->num1 = $num1;
        $this->calcularPrimo();
    }

    private function calcularPrimo() {
        if ($this->num1 < 2) {
            $this->resultado = "El número {$this->num1} no es primo.";
            return;
        }
        
        for ($i = 2; $i <= sqrt($this->num1); $i++) {
            if ($this->num1 % $i == 0) {
                $this->resultado = "El número {$this->num1} no es primo.";
                return;
            }
        }
        
        $this->resultado = "El número {$this->num1} es primo.";
    }

    public function getResultado() {
        return $this->resultado;
    }
}
?>