<?php
// Clase para establecer una conexión a una base de datos
class Conexion {
    // Variables de la clase que almacenan la información de la base de datos
    private $servidor = 'localhost'; // Dirección del servidor de la base de datos
    private $usuario = 'root'; // Nombre de usuario para acceder a la base de datos
    private $password = '1234'; // Contraseña para acceder a la base de datos
    private $base_datos = 'tareasweb'; // Nombre de la base de datos a la que se quiere conectar
    public $conexion; // Variable que almacena la conexión a la base de datos

    // Método constructor que se ejecuta automáticamente cuando se crea un objeto de la clase
    public function __construct() {
        // Establece la conexión a la base de datos utilizando la extensión mysqli de PHP
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->base_datos);

        // Verifica si la conexión fue exitosa
        if ($this->conexion->connect_error) {
            // Si la conexión falló, muestra un mensaje de error con la descripción del error
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    // Método para cerrar la conexión a la base de datos
    public function cerrar() {
        // Cierra la conexión a la base de datos
        $this->conexion->close();
    }
}
?>
