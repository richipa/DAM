<?php
class Producto {
    protected $nombre;
    protected $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function mostrarDetalles() {
        // Retorna los detalles en lugar de imprimirlos directamente
        return "Nombre: " . $this->nombre . "\n" .
                "Precio: " . $this->precio . "\n";
    }
}

class Electrodomestico extends Producto {
    private $consumo;

    public function __construct($nombre, $precio, $consumo) {
        parent::__construct($nombre, $precio);
        $this->consumo = $consumo;
    }

    public function mostrarDetalles() {
        // Retorna los detalles con eficiencia incluida
        return parent::mostrarDetalles() .
                "Consumo: " . $this->consumo . "\n";
    }
}
$producto = new Producto("Sillón de cuero", 500);
echo $producto->mostrarDetalles() . "\n";

$electrodomestico = new Electrodomestico("Frigorifico", 300, "77kwh");
echo $electrodomestico->mostrarDetalles();
?>