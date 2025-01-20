<?php
class Circulo{
    private $radio;
    public function getRadio() {
        return $this->radio;
    }
    public function setRadio($radio_2) {
        return $this->radio = $radio_2;
    }
    public function calcularArea() {
       echo "El area del circulo es: ". $this->radio * 3.14/2;
    }
}

$miRadio = new Circulo();
$miRadio->setRadio(5);
$miRadio->calcularArea();
?>

