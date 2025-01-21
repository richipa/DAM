<?php
class Vehiculo{
    //He cambiado a protected para que las clases hijas puedan acceder a estos atributos
    protected $marca;
    protected $modelo;
    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    public function encender(){
        echo "El vehiculo". " ". $this->marca. " ". "modelo". " ". $this->modelo. " ". "se ha arrancado, suena brutal\n";
    }
}
class Coche extends Vehiculo{
    private $combustible;
    public function __construct($marca, $modelo, $combustible){
        parent::__construct($marca, $modelo);
        $this->combustible = $combustible;
    }
    public function mostrarDetalles(){
        echo "Especificaciones del Coche\n\n";
        echo "Marca: ". $this->marca. "\n\n";
        echo "Modelo: ". $this->modelo. "\n\n";
        echo "Combustible: ". $this->combustible. "\n";
    }
}
$coche = new Coche("Seat", "Ibiza", "Diesel");
$coche->encender();
$coche->mostrarDetalles();
?>