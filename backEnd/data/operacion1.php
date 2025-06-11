<?php
class Promedio {
    private $num1;
    private $num2;
    private $num3;
    private $resultado;

    public function __construct($num1, $num2, $num3) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
        $this->calcularPromedio();
    }
    
    public function calcularPromedio() {
        $this->resultado = ($this->num1 + $this->num2 + $this->num3) / 3;
    }

    public function getResultado() {
        return $this->resultado;
    }
}
?>