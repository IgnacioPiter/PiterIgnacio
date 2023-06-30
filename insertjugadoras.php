<?php
    require_once('conexion.php');

    if($_SERVER["request_method"] == "post") {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $club = $_POST["club"];
        $edad = $_POST["edad"];


        if ($nombre && $apellido && $club && $edad) {
            $query ="insert info jugadoras (nombre,apellido,club,edad) values (:nombre;apellido,club,edad)";
            //preparo la consulta
            $stmt = $conex ->prepare($query);
            $stmt -> bindparam(":nombre",$nombre);
            $stmt -> bindparam(":apellido",$apellido);
            $stmt -> bindparam(":club",$club);
            $stmt -> bindparam(":edad",$edad);
            $stmt ->execute();

            echo "Jugadora registrada";
        }   else {
            echo "Jugadora no registrada";
        }

    }
    

   
?>