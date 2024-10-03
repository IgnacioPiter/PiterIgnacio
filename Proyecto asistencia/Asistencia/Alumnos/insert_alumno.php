<?php

require_once "../conexion.php";
require_once "Alumno.php"; 

                
session_start();// Inicia una sesión para manejar los datos del alumno registrado

// Crea una instancia de la conexion a la base de datos
$database = new Database();
$db = $database->connect();

// Crear una instancia de Alumno
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $materia = $_POST['materia'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];


    $alumno = new Alumno();
    
    // insertar un nuevo alumno
    if ($alumno->setAlumno($database, $nombre, $apellido, $dni, $email, $materia, $fecha_nacimiento)) {
       
        $_SESSION['alumno'] = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'dni' => $dni,
            'email' => $email,
            'materia' => $materia,
            'fecha_nacimiento' => $fecha_nacimiento
        ];
        
       
        header("Location: index_alumno.php");
        exit();
    } else {
        echo "Error al registrar el alumno.";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumno</title>
</head>
<body>
    <h1>Registro de Alumno</h1>
    <form action="insert_alumno.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="dni">DNI:</label>
        <input type="number" id="dni" name="dni" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="materia">Materia:</label>
        <input type="text" id="materia" name="materia" required>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>