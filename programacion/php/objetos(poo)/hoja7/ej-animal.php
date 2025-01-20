<?php
class Animal{
    private $especie;
    public function __construct($especie_ext)
    {
        $this ->especie = $especie_ext;
    }
    public function emtiendoSonido(){
        echo "El animal de la especie " . $this->especie . " emite un sonido";
    }
}

class Perro extends Animal{
    private $raza;
    public function __construct($especie_ext, $raza_ext)
    {
        parent::__construct($especie_ext);
        $this ->raza = $raza_ext;
    }
    public function emtiendoSonido(){
        echo "El perro de la raza " . $this->raza . " emite un ladrido";
    }
}

$perro = new Perro("Canino", "Pastor Alemán");
$perro->emtiendoSonido();
$animal = new Animal("Felino");
$animal->emtiendoSonido();
?>