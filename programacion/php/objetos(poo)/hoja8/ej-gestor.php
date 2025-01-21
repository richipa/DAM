<?php
class Tarea{
    private $nombre;
    private $nuevadescripcion;
    private $fechalimite;
    private $estado;
    public function __construct($nombre_ext, $descripcion_ext, $fechalimite_ext, $estado_ext) {
        $this ->nombre = $nombre_ext;
        $this->nuevadescripcion = $descripcion_ext;
        $this->fechalimite = $fechalimite_ext;
        $this->estado = $estado_ext;
    }
    //Agrego los metodos que me pide el enunciado
    public function ComoCompletada(){
        $this->estado = "Tarea Completada";
    }
    public function editarDescripcion($nuevadescripcion){
        $this->nuevadescripcion = $nuevadescripcion;
    }
    public function mostrarTarea(){
        echo "Nombre de la tarea: ". $this->nombre . "\n\n";
        echo "Descripcion de la tarea: ". $this->nuevadescripcion . "\n\n";
        echo "Fecha Limite: ". $this->fechalimite . "\n\n";
        echo "Estado de la tarea: ". $this->estado . "\n";
    }
}
// Lista de tareas
$tareas = [
    new Tarea("Tarea 1", "Hacer la compra de la semana", "2023-12-01", "Pendiente"),
    new Tarea("Tarea 2", "Ir al gimnasio", "2023-12-02", "Pendiente"),
    new Tarea("Tarea 3", "Salir a correr", "2023-12-03", "Pendiente"),
    new Tarea("Tarea 4", "Hacer los ejercicios de clase", "2023-12-04", "Pendiente"),
    new Tarea("Tarea 5", "Dormir (jajaja)", "2023-12-05", "Pendiente")
];
// Completar la tarea 1
$tareas[0]->ComoCompletada();
$tareas[0]->mostrarTarea();
echo "\n\n";
// Editar la descripcion de la tarea 5
$tareas[4]->editarDescripcion("Dormir la siesta");
$tareas[4]->mostrarTarea();
?>