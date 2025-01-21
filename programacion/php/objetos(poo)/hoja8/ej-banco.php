<?php
class CuentaBancaria{
    private $titular;
    private $saldo;
    private $tipocuenta;
    public function __construct($titular_ext, $saldo_ext, $tipocuenta_ext) {
        $this ->titular = $titular_ext;
        $this->saldo = $saldo_ext;
        $this->tipocuenta = $tipocuenta_ext;
    }
    public function depositar($cantidad){
        $this->saldo += $cantidad;
        echo "Se han depositado: " . $cantidad . " " . "euros" . "\n\n";
        echo "El saldo actual es: " . $this->saldo . " " . "euros" . "\n";
    }
    public function retirar($cantidad){
        if ($this->saldo < $cantidad){
            echo "No se puede retirar la cantidad solicitada, saldo insuficiente";
        } else {
            $this->saldo -= $cantidad;
            echo "Se ha retirado: " . $cantidad . " " . "euros" . "\n\n";
            echo "El saldo actual es: " . $this->saldo . " " . "euros". "\n";
        }
    }
    public function mostrarInfo(){
        echo "Titular: " . $this->titular . "\n\n";
        echo "Saldo Actual: " . $this->saldo . "\n\n";
        echo "Tipo de Cuenta: " . $this->tipocuenta . "\n";
    }    
}
$cuenta = new CuentaBancaria("Richi", 1, "Cuenta Estudiante");
$cuenta->depositar(460);
$cuenta->retirar(100);
$cuenta->mostrarInfo();
?>