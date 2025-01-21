<?php
class Empleado{
    private $nombre;
    private $sueldo;
    private $puesto;
    public function __construct($nombre, $sueldo, $puesto){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->puesto = $puesto;
    }
    public function setSueldo($nuevoSueldo){
        $this->sueldo = $nuevoSueldo;
    }
    public function getSueldo(){
        return $this->sueldo;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function getPuesto() {
        return $this->puesto;
    }
}
class Manager Extends Empleado{
    private $departamento;
    public function __construct($nombre, $sueldo, $puesto, $departamento){
        parent::__construct($nombre, $sueldo, $puesto);
        $this->departamento = $departamento;
    }
    public function getDepartamento(){
        return $this->departamento;
    }
    public function setDepartamento($nuevoDepartamento){
        $this->departamento = $nuevoDepartamento;
    }
    public function revisarEmpleado($empleado){
        echo "El empleado es ". $empleado->getNombre(). " y su puesto es ". $empleado->getPuesto(). " ". "cobrando actualmente". " ". $this->getSueldo(). " ". "al mes". "\n\n";
    }
}
$empleado1 = new Empleado("Ricardo", 1000, "Programador");
$empleado2 = new Empleado("Ian", 1200, "Diseñador");
$manager1 = new Manager("Sergio", 2000, "Manager", "Desarrollo");
$manager1->revisarEmpleado($empleado1);
$manager1->revisarEmpleado($empleado2);
?>