<?php
class Banco {
    public $nombre;
    public $direccion;
    public $cuentasBancarias = [];

    public function __construct($nombre, $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function agregarCuenta($cuenta) {
        $this->cuentasBancarias[] = $cuenta;
    }

    public function buscarCuentaPorTitular($nombre, $apellido) {
        foreach ($this->cuentasBancarias as $cuenta) {
            if ($cuenta->titular->nombre === $nombre && $cuenta->titular->apellido === $apellido) {
                return $cuenta;
            }
        }
        return null;
    }
}
?>
