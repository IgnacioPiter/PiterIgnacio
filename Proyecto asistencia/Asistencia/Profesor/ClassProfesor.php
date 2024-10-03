<?php

class ClassProfesor{

    public function setProfesor($database, $nombre, $apellido, $contrasena, $email, $dni, $legajo, $instituto){
        $query= "INSERT INTO `profesores`(`id`, `nombre`, `apellido`, `contrasena`, `email`, `dni`, `legajo`,`instituto`) 
        VALUES (NULL,'$nombre','$apellido','$contrasena','$email','$dni','$legajo','$instituto')";
            $stmt = $database -> conn -> prepare($query) ; //prepara la consulta
            $stmt -> execute(); // ejecuta la consulta
            //  $usuario = $stmt -> fetchAll();  Devuelve los datos
    }

}

?>