<?php
class Carrito {
    private $productos = [];

    public function __construct($producto1, $producto2, $producto3, $producto4) {
        // Asignamos los productos a un array
        $this->productos[] = $producto1;
        $this->productos[] = $producto2;
        $this->productos[] = $producto3;
        $this->productos[] = $producto4;
    }
    public function agregarProducto($nombre, $precio, $cantidad) {
        $producto = ['nombre' => $nombre, 'precio' => $precio, 'cantidad' => $cantidad];
        $this->productos[] = $producto; // Añadimos el producto al array
        echo "Se ha añadido: " . $nombre . " con precio: " . $precio . " y cantidad: " . $cantidad . "\n\n";
    }
    public function quitarProducto($nombre) {
        foreach ($this->productos as $index => $producto) {
            if ($producto['nombre'] === $nombre) {
                unset($this->productos[$index]); // Eliminamos el producto por su nombre
                echo "Se ha eliminado: " . $nombre . "\n\n";
                return;
            }
        }
        echo "Producto no encontrado.\n\n";
    }
    public function calcularTotal() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto['precio'] * $producto['cantidad'];
        }
        echo "El total es de: " . $total . " euros\n";
    }
    public function mostrarDetalleCarrito() {
        foreach ($this->productos as $producto) {
            echo "Nombre: " . $producto['nombre'] .  "\n";
            echo "Cantidad: " . $producto['cantidad'] . " ". "unidades". "\n";
            echo "Precio: " . $producto['precio'] . " ". "euros". "\n\n";
        }
    }
}

// Crear productos como arrays
$producto1 = ['nombre' => 'Carne', 'precio' => 5.80, 'cantidad' => 2];
$producto2 = ['nombre' => 'Cereales', 'precio' => 3.50, 'cantidad' => 3];
$producto3 = ['nombre' => 'Leche', 'precio' => 1.20, 'cantidad' => 4];
$producto4 = ['nombre' => 'Pan', 'precio' => 0.80, 'cantidad' => 5];

$carrito = new Carrito($producto1, $producto2, $producto3, $producto4);
$carrito->mostrarDetalleCarrito();
$carrito->agregarProducto('Jamon', 2.50, 1);
$carrito->calcularTotal();
$carrito->quitarProducto('Cereales');
?>
