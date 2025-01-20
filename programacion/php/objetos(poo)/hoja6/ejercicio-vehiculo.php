<?php
class Vehiculo{
    private $marca;
    public function getMarca() {
        return $this->marca;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function encender() {
        echo "El coche de marca: " . $this->getMarca() . " está encendido.";
    }
}
class Coche extends Vehiculo{
    private $modelo;
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function encender() {
        echo "El coche de marca " . $this->getMarca() . " y modelo " . $this->getModelo() . " está encendido.";
    }
}

$micoche = new Coche("","","");
$micoche->setMarca("Seat");
$micoche->setModelo("Ibiza");
$micoche->encender();
?>