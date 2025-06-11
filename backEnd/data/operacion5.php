<?php
class Potencia{
    private $num1;
    private $num2;
    private $resultado;

    public function __construct($num1, $num2) {
        $this->base = $num1;
        $this->exponente =$num2;
        $this->calcular();
    }

    private function calcular() {
        if ($this->exponente < 0) {
            $this->resultado = 1 / pow($this->base, abs($this->exponente));
        } else {
            $this->resultado = pow($this->base, $this->exponente);
        }
    }

    public function getResultado() {
        return $this->resultado;
    }
}
?>