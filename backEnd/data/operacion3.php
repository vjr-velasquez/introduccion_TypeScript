<?php
class Par_impar{
    private $num1;
    private $resultado;

    public function __construct($num1) {
        $this->num1 = $num1;
        $this->determinarParImpar();
    }

    private function determinarParImpar() {
        if ($this->num1 % 2 == 0) {
            $this->resultado = "El número {$this->num1} es par.";
        } else {
            $this->resultado = "El número {$this->num1} es impar.";
        }
    }

    public function getResultado() {
        return $this->resultado;
    }
}
?>