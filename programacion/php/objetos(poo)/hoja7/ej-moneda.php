<?php
class ConversorMoneda{
    private $cantidad;
    public function __construct($cantidad_ext){
        $this ->cantidad = $cantidad_ext;
    }    
    public function convertirDolaresAEuros($cantidad){
        echo "En euros el resultado es: ". $cantidad * 0.82;
    }
    public function convertirEurosaDolares($cantidad){
        echo "En dólares el resultado es: ". $cantidad * 1.22;
    }
}

$conversor = new ConversorMoneda(100);
$conversor->convertirDolaresAEuros(50);
$conversor->convertirEurosaDolares(70);
?>