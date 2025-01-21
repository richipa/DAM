<?php
class Personaje {
    private $nombre;
    private $nivel;
    private $puntosVida;
    private $puntosAtaque;

    public function __construct($nombre, $nivel = 1, $puntosVida = 100, $puntosAtaque = 10) {
        $this->nombre = $nombre;
        $this->nivel = $nivel;
        $this->puntosVida = $puntosVida;
        $this->puntosAtaque = $puntosAtaque;
    }

    public function atacar(Personaje $objetivo) {
        echo $this->nombre . " ataca a " . $objetivo->getNombre() . " causando " . $this->puntosAtaque . " puntos de daño.\n";
        $objetivo->recibirDanio($this->puntosAtaque);
    }

    private function recibirDanio($danio) {
        $this->puntosVida -= $danio;
        if ($this->puntosVida < 0) {
            $this->puntosVida = 0;
        }
        echo $this->nombre . " ahora tiene " . $this->puntosVida . " puntos de vida.\n";
    }

    public function curarse() {
        $vidaRestaurada = 20 + ($this->nivel * 2);
        $this->puntosVida += $vidaRestaurada;
        echo $this->nombre . " se cura y recupera " . $vidaRestaurada . " puntos de vida. Vida total: " . $this->puntosVida . ".\n";
    }

    public function subirNivel() {
        $this->nivel++;
        $this->puntosAtaque += 5;
        $this->puntosVida += 30;
        echo $this->nombre . " sube al nivel " . $this->nivel . ". Ahora tiene " . $this->puntosAtaque . " puntos de ataque y " . $this->puntosVida . " puntos de vida.\n";
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPuntosVida() {
        return $this->puntosVida;
    }

    public function mostrarEstado() {
        echo "Nombre: " . $this->nombre . ", Nivel: " . $this->nivel . ", Vida: " . $this->puntosVida . ", Ataque: " . $this->puntosAtaque . "\n";
    }
}

// Crear personajes
$guerrero = new Personaje("Imperial");
$mago = new Personaje("Mago", 1, 80, 15);

echo "Presentacion de los personajes:\n";
$guerrero->mostrarEstado();
$mago->mostrarEstado();
echo "\n";

// Simular una batalla
$guerrero->atacar($mago);
$mago->curarse();
$mago->atacar($guerrero);
$guerrero->subirNivel();
$guerrero->atacar($mago);
$mago->curarse();

echo "\nEstado final de los personajes:\n";
$guerrero->mostrarEstado();
$mago->mostrarEstado();
?>
