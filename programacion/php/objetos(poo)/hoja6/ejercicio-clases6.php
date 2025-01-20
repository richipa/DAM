<?php
class Libro {
    private $titulo;
    private $autor;
    private $numero_paginas;

    // Métodos para obtener los valores
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getPaginas() {
        return $this->numero_paginas;
    }

    // Métodos para establecer los valores
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setPaginas($numero_paginas) {
        $this->numero_paginas = $numero_paginas;
    }

    // Método para mostrar la información
    public function mostrarinfo() {
        echo "El libro: " . $this->titulo . " del autor: " . $this->autor . " con " . $this->numero_paginas . " páginas.";
    }
}

// Crear una instancia del libro
$milibro = new Libro();

// Establecer los valores
$milibro->setTitulo("Harry Potter");
$milibro->setAutor("J.K. Rowling");
$milibro->setPaginas(200);

// Mostrar la información
$milibro->mostrarinfo();
?>

