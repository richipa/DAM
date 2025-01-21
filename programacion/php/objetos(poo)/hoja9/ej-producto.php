<?php

class Producto {
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function mostrarDetalles() {
        echo "Nombre: " . $this->getNombre() . "\n";
        echo "Precio: " . $this->getPrecio() . "€\n";
    }
}

class ProductoImportado extends Producto {
    private $impuestoAdicional;

    public function __construct($nombre, $precio, $impuestoAdicional) {
        parent::__construct($nombre, $precio);
        $this->impuestoAdicional = $impuestoAdicional;
    }

    public function getPrecioConImpuesto() {
        return $this->getPrecio() + $this->impuestoAdicional;
    }

    public function mostrarDetalles() {
        parent::mostrarDetalles();
        echo "Impuesto adicional: " . $this->impuestoAdicional . "€\n";
        echo "Precio con impuesto adicional: " . $this->getPrecioConImpuesto() . "€\n";
    }
}

$producto1 = new Producto("Taladro Bosch", 500);
echo "Detalles del producto:\n";
$producto1->mostrarDetalles();
echo "\n";

$producto2 = new ProductoImportado("Taladro Siemens", 750, 150);
echo "Detalles del producto importado:\n";
$producto2->mostrarDetalles();
?>
