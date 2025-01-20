<?php
class Persona{
    private $nombre;
    private $edad;
    private $genero;

    public function __construct($nombre_ext, $edad_ext, $genero_ext)
    {
        $this ->nombre = $nombre_ext;
        $this->edad = $edad_ext;
        $this->genero = $genero_ext;

    }
    public function presentar(){
        echo "Hola, mi nombre es " . $this->nombre . " tengo " . $this->edad . " años y soy " . $this->genero;
    }
}

$presentacion = new Persona("Ricardo", 21, "hombre");
$presentacion->presentar();
?>