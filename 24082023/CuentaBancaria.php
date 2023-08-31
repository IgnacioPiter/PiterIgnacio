<?php
class CuentaBancaria {
    public $numCuenta;
    public $titular;
    public $saldo;

    public function __construct($numCuenta, $titular, $saldo = 0) {
        $this->numCuenta = $numCuenta;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($cantidad) {
        $this->saldo += $cantidad;
    }

    public function retirar($cantidad) {
        if ($this->saldo >= $cantidad) {
            $this->saldo -= $cantidad;
            return true;
        } else {
            return false;
        }
    }
}
?>
