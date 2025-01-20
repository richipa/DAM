<?php
class Empleado {
    private $nombre;
    private $sueldo;

    // Getter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Getter para sueldo
    public function getSueldo() {
        return $this->sueldo;
    }

    // Setter para nombre
    public function setNombre($nombre_empleado) {
        $this->nombre = $nombre_empleado;
    }

    // Setter para sueldo
    public function setSueldo($sueldo_empleado) {
        $this->sueldo = $sueldo_empleado;
    }

    // Mostrar detalles del empleado
    public function mostrarDetalles() {
        echo "Nombre de empleado: " . $this->getNombre() . "\n" . "Sueldo: " . $this->getSueldo() . "\n";
    }
}

class Gerente extends Empleado {
    private $departamento;

    // Getter para departamento
    public function getDepartamento() {
        return $this->departamento;
    }

    // Setter para departamento
    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    // Mostrar detalles del gerente, incluyendo detalles del empleado
    public function mostrarDetalles() {
        // Llamar al método de la clase base (Empleado)
        parent::mostrarDetalles();
        echo "Departamento del gerente: " . $this->getDepartamento() . "\n";
    }
}

// Crear un objeto de la clase Empleado
$empleado = new Empleado();
$empleado->setNombre("Ricardo");
$empleado->setSueldo(2000);

// Crear un objeto de la clase Gerente
$gerente = new Gerente();
$gerente->setNombre("Carlos Sainz");
$gerente->setSueldo(1000);
$gerente->setDepartamento("Informática");

// Mostrar los detalles del empleado
$empleado->mostrarDetalles();  // Muestra: Nombre de empleado: Ricardo, Sueldo: 2000

// Mostrar los detalles del gerente
$gerente->mostrarDetalles();   // Muestra: Nombre de empleado: Carlos, Sueldo: 5000, Departamento del gerente: Informática
?>
