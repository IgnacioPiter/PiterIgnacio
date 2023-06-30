<?php
    require_once('conexion.php');
   
    $query = " Update jugadoras SET nombre=:nombre,apellido=:apellido,club=:club,edad=:edad where id =:id"
    
?>