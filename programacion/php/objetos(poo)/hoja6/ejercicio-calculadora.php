<?php
class Calculadora {
    private $numero1;
    private $numero2;

    // Método para establecer los valores de los números
    public function setNumeros($num1, $num2) {
        $this->numero1 = $num1;
        $this->numero2 = $num2;
    }

    public function sumar() {
        echo "La suma es: " . ($this->numero1 + $this->numero2) . "\n";
    }

    public function restar() {
        echo "La resta es: " . ($this->numero1 - $this->numero2) . "\n";
    }

    public function multiplicar() {
        echo "La multiplicación es: " . ($this->numero1 * $this->numero2) . "\n";
    }

    public function dividir() {
        if ($this->numero2 != 0) {
            echo "La división es: " . ($this->numero1 / $this->numero2) . "\n";
        } else {
            echo "No se puede dividir entre 0\n";
        }
    }
}

// Crear una instancia de la clase Calculadora
$operacion = new Calculadora();

// Establecer valores para los números
$operacion->setNumeros(10, 0);

// Llamar a los métodos
$operacion->sumar();
$operacion->restar();
$operacion->multiplicar();
$operacion->dividir();
?>
