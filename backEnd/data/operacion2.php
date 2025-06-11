<?php
class Area{
    private $num1;
    private $num2;
    private $area;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calcularArea();
    }
    public function calcularArea() {
        $this->area = ($this->num1 * $this->num2) / 2; // Area = (base * altura) / 2
    }
    public function getResultado() {
        return $this->area;
    }
}

?>