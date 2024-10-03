<?php
require_once "../conexion.php";
require_once "../Profesor/ClassProfesor.php";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registro - Sistema de Asistencias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .toggle {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
        
    <form action="register.php" method="POST">
    <h2>Registro de Profesor</h2>
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" required><br>

        <label>DNI:</label>
        <input type="text" name="dni"><br>

        <label>Instituto</label>
        <input type="text" name="instituto"><br>

        <label>Legajo:</label>
        <input type="number" name="legajo"><br>

        <button type="submit">Crear cuenta</button>
    </form>
    </body>

</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos
    $nombre = ($_POST['nombre']);
    $apellido = ($_POST['apellido']);
    $contrasena = ($_POST['contrasena']);
    $email = ($_POST['email']);
    $dni = ($_POST['dni']);
    $legajo = ($_POST['legajo']);
    $instituto = ($_POST['instituto']);
    
    $database = new Database();//crear una base de datos

    $conn = $database->connect();// conecta a la base de datos


    $profesor = new ClassProfesor();

    $profesor->setProfesor($database, $nombre, $apellido, $contrasena, $email, $dni, $legajo, $instituto);
    
    }
    // header('Location: ../index.php');
?>