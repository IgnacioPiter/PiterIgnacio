<?php

class Alumno {
    private $conn;
    private $table = 'alumno';
    
    //public $id;
    //public $nombre;
    //public $apellido;
    //public $dni;
    //public $email;
    //public $materia;
    //public $fecha_nacimiento;
    

    // Método para crear un nuevo alumno
    public function setAlumno($database, $nombre, $apellido, $dni, $email, $materia, $fecha_nacimiento) {
        $query = "INSERT INTO (nombre, apellido, dni, email, materia, fecha_nacimiento ) 
        VALUES (null,nombre, apellido, dni, email, materia, fecha_nacimiento)";
        
        $stmt = $database->conn->prepare($query);
        $stmt -> execute(); // ejecuta la consoola
        $alumno = $stmt -> fetchAll(); //devuelve los datos
        
        // $stmt->bindParam(':nombre', $this->nombre);
        // $stmt->bindParam(':apellido', $this->apellido);
        // $stmt->bindParam(':dni', $this->dni);
        // $stmt->bindParam(':email', $this->email);
        // $stmt->bindParam(':materia', $this->materia);
        // $stmt->bindParam(':fecha_nacimiento', $this->fecha_nacimiento);
        


        
    }

    public function getAlumno($database, $id){
        $query= "SELECT * FROM `alumnos` WHERE `alumnos`.`id` = $id";
        $stmt = $database -> conn -> prepare($query);
        $stmt -> execute();
        $alumno = $stmt -> fetchAll();

        return $alumno;
    }

    // Otros métodos (read, update, delete) se podrían implementar aquí
}

