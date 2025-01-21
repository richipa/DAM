<?php
class Empleado{
    private $nombre;
    private $sueldo;
    private $aniosExperiencia;
    public function __construct($nombre_ext, $sueldo_ext, $aniosExperiencia_ext) {
        $this->nombre = $nombre_ext;
        $this->sueldo = $sueldo_ext;
        $this->aniosExperiencia = $aniosExperiencia_ext;
    }
        // Método get para obtener los años de experiencia
        public function getAniosExperiencia() {
            return $this->aniosExperiencia;
        }
    
        // Método get para obtener el sueldo
        public function getSueldo() {
            return $this->sueldo;
        }
    public function calcularBonus(){
        $bonus = ($this->aniosExperiencia / 2) * 0.05 * $this->sueldo;
    }
    public function mostrarDetalles(){
        echo "Nombre: " . $this->nombre . "\n\n";
        echo "Sueldo: " . $this->sueldo . "\n\n";
        echo "Años de experiencia: " . $this->aniosExperiencia . "\n\n";
    }
}

class Consultor extends Empleado{
    private $horasPorProyecto;
    public function __construct($nombre, $sueldo, $aniosExperiencia,$horasPorProyecto) {
        parent::__construct($nombre, $sueldo, $aniosExperiencia);
        $this->horasPorProyecto = $horasPorProyecto;
    }
    public function calcularBonus(){
        $bonus = ($this->getAniosExperiencia() / 2) * 0.05 * $this->getSueldo();
        echo "El bonus es de: ". $bonus . " ". "euros". "\n\n";
        if ($this->horasPorProyecto > 100)
        $bonus += 1;
        echo "El bonus incrementado es de: " . $bonus ." ". "euros". "\n\n";

    }
}
$empleado = new Empleado("Iker", 1200, 2);
$empleado->calcularBonus();
$empleado->mostrarDetalles();

$consultor = new Consultor("Marcos", 1200, 3, 150);
$consultor->calcularBonus();
$consultor->mostrarDetalles();
?>