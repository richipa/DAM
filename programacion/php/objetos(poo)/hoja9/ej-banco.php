<?php
class CuentaBancaria{
    private $titular;
    private $saldo;
    private $tipoCuenta;
    public function __construct($titular_ext, $tipoCuenta_ext) {
        $this->titular = $titular_ext;
        $this->tipoCuenta = $tipoCuenta_ext;
        $this->saldo = 0;
    }
    public function getTitular(){
        $this->titular;
    }
    public function getSaldo(){
        $this->saldo;
    }
    public function getTipoCuenta(){
        $this->tipoCuenta;
    }
    public function depositar($cantidad){
        $this->saldo += $cantidad;
        echo "Se han depositado: " . $cantidad . " " . "euros" . "\n\n";
        echo "El saldo actual es: " . $this->saldo . " " . "euros" . "\n";
    }
    public function retirar($cantidad) {
        if ($this->verificarSaldoSuficiente($cantidad)) {
            $this->saldo -= $cantidad;
            echo "Retiro de " . $cantidad . "€ realizado. Saldo restante: " . $this->saldo . "€.\n";
        } else {
            echo "Saldo insuficiente para realizar el retiro de " . $cantidad . "€.\n";
        }
    }
    public function verificarSaldoSuficiente($cantidad){
        return $this->saldo >= $cantidad;
    }
    public function mostrarInfo(){
        echo "Titular: " . $this->titular . "\n\n";
        echo "Saldo Actual: " . $this->saldo . " ". "euros". "\n\n";
        echo "Tipo de Cuenta: " . $this->tipoCuenta . "\n";
    }  

}
$cuentaBancaria = new CuentaBancaria("Ricardo", "Cuenta Estudiante", 2.21);
$cuentaBancaria->mostrarInfo();
$cuentaBancaria->depositar(2000);
$cuentaBancaria->retirar(2000);
?>