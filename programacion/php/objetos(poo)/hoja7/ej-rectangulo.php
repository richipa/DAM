<?php
class Rectangulo{
    private $base;
    private $altura;

    public function __construct($base_ext, $altura_ext)
    {
        $this ->base = $base_ext;
        $this->altura = $altura_ext;
    }
    public function calcularArea(){
        echo "El resultado del area es: " . $this->base * $this->altura . " " . "centímetros";
    }
}

$rectangulo = new Rectangulo(10, 5);
$rectangulo->calcularArea();
?>
