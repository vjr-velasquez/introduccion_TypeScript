<?php
class Mayor_menor{
    private $num1;
    private $num2;
    private $num3;
    private $mayor;
    private $menor;

    public function __construct($num1, $num2, $num3) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
        $this->determinarMayorMenor();
    }

    private function determinarMayorMenor() {
        $this->mayor = max($this->num1, $this->num2, $this->num3);
        $this->menor = min($this->num1, $this->num2, $this->num3);
    }

    public function getMayor() {
        return $this->mayor;
    }

    public function getMenor() {
        return $this->menor;
    }
}
?>