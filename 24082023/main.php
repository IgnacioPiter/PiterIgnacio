<?php
require_once 'persona.php';
require_once 'banco.php';
require_once 'cuentabancaria.php';


$persona = new Persona("John", "Doe", 30, "12345678");


$banco = new Banco("Mi Banco", "Calle Principal 123");


$cuenta = new CuentaBancaria("123456789", $persona, 1000);


$banco->agregarCuenta($cuenta);


$cuenta->depositar(500);
$cuenta->retirar(200);


$titular = $banco->buscarCuentaPorTitular("John", "Doe");

if ($titular) {
    echo "Cuenta encontrada: " . $titular->numCuenta . "\n";
} else {
    echo "Cuenta no encontrada.\n";
}
?>
