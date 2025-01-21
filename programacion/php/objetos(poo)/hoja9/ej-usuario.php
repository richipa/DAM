<?php
class Usuario{
    protected $nombre;
    protected $email;
    public function __construct($nombre_ext, $email_ext){
        $this->nombre = $nombre_ext;
        $this->email = $email_ext;        
    }
    public function mostrarInfo(){
        echo "Informacion del Usuario\n\n";
        echo "Nombre: ". $this->nombre. "\n\n";
        echo "Correo: ". $this->email. "\n\n";
    }
}
class Administrador extends Usuario{
    protected $nivelAcceso;
    public function __construct($nombre, $email,$nivelAcceso_ext) {
        parent::__construct($nombre, $email); 
        $this->nivelAcceso = $nivelAcceso_ext;  
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getEmail(){
        return $this->email;
    }
    public function mostrarInfo(){
        echo "Informacion del Administrador\n\n";
        echo "Nombre: ". $this->getNombre(). "\n\n";
        echo "Correo: ". $this->getEmail(). "\n\n";
        echo "Nivel de Acceso: ". $this->nivelAcceso. "\n\n";
    }
}
$usuario1 = new Usuario("Ricardo", " riki@gmail.com");
$usuario1->mostrarInfo();
$admin1 = new Administrador("CampusFP","campusfp@gmail.com","Superusuario");
$admin1->mostrarInfo();
?>