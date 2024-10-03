<?php
require_once '../conexion.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = ($_POST['email']);
    $contrasena = $_POST['contrasena'];

    $database = new Database();

    $conn = $database->connect();

    $query= "SELECT * FROM profesores WHERE email = '$email' AND contrasena = '$contrasena'";
            $stmt = $database -> conn -> prepare($query) ; //prepara la consulta
            $stmt -> execute(); // ejecuta la consulta
            $usuario = $stmt -> fetchAll(); // Devuelve los datos
            if ($usuario == !null){ // el ! niega la condicion q le pongo adelante en este caso es para que no sea nulo usuario

                echo "Login exitoso.";
                header('Location: ../Alumnos/index_alumno.php');

            } else{
                echo "Login erroneo.";
                    
                

            }
                
            ;

            
           
}