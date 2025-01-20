<?php
/*
class Mascota {
    public $nombre;
    public $tipo;

    // Método para presentar la mascota
    public function presentar() {
        echo "Hola, soy " . $this->nombre . " y soy un(a) " . $this->tipo . ".
";
    }

    // Método para emitir un sonido
    public function emitirSonido() {
        if ($this->tipo == "perro") {
            echo "Guau guau!
";
        } elseif ($this->tipo == "gato") {
            echo "Miau miau!
";
        } else {
            echo "Este animal no tiene un sonido definido.
";
        }
    }
}

// Crear una instancia de Mascota
$miMascota = new Mascota();
$miMascota->nombre = "Isidoro";
$miMascota->tipo = "gato";

// Usar los métodos
$miMascota->presentar();
$miMascota->emitirSonido();
*/

class Coche{
    private $color;
    private $marca;
    private $modelo;

    public function __construct($color_ext, $marca_ext, $modelo_ext)
    {
        $this ->color = $color_ext;
        $this->marca = $marca_ext;
        $this->modelo = $modelo_ext;

    }
}




?>

