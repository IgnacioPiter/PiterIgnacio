<?php
    require_once "../conexion.php";

        $database = new Database();

        $datos = $database->ejecutarConsulta('SELECT * FROM `Alumno`') ;
       
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Lista de Alumnos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Materia</th>
            <th>Fecha de Nacimiento</th>
        </tr>

        <?php foreach ($datos as $alumno) { ?>
            <tr>
                <td><?php echo $alumno['nombre']; ?></td>
                <td><?php echo $alumno['apellido']; ?></td>
                <td><?php echo $alumno['dni']; ?></td>
                <td><?php echo $alumno['email']; ?></td>
                <td><?php echo $alumno['Materia']; ?></td>
                <td><?php echo $alumno['fecha_nacimiento']; ?></td>
               
                <td>
                   
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="insert_alumno.php">Agregar Alumno</a>
</body>
</html>


