
<?php
require_once "../conexion.php";
require_once "Alumno.php";

$database = new Database();



// Crear una instancia de Alumno
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $email = $_POST['email'];
        $fecha_nacimiento = $_POST['fecha_nacimineto'];
        $materia = $_POST['materia'];
        
        // Crear una instancia de la conexión a la base de datos
        $database = new Database();
        $db = $database->connect();
        
        $alumno = new Alumno();

        $alumno->setAlumno($database, $nombre, $apellido, $dni, $email, $fecha_nacimiento, $materia);

        header(`location: index_alumno.php`);
    }   
    


    //Intentar crear un nuevo registro
   // if ($alumno->setAlumno()) {
     //echo "Alumno creado exitosamente.";
    //} else {
     //echo "Error al crear el alumno.";
    //}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Registro de Alumno</h2>
        <form action="index_alumno.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="dni">DNI:</label>
            <input type="number" id="dni" name="dni" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="notas">Materia:</label>
            <input type="text" id="materia" name="materia" required>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                 <?php
                // foreach ($materias as $materia) {
                //     echo '<option value="' . $materia['id'] . '">' . $materia['nombre'] . '</option>';
                // }
                ?>
                
            </select>

            <input type="submit" value="Enviar">
        </form>
</body>
</html>

