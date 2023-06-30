<?php
    require_once('conexion.php');  //incluir archivos - si no esta incluido que lo incluya

    $query = "select * from users"; // Consulta
    $stmt = $conex -> prepare($query) ; //prepara la consulta
    $stmt -> execute(); // ejecuta la consulta
    $usuario= $stmt -> fetchAll(); // Devuelve los datos
    
    $query2= "select * from jugadoras";
    $stmt2 = $conex -> prepare($query2);
    $stmt2 -> execute();
    $jugadoras = $stmt2 -> fetchAll();   
    
    $edadjugadoras=array();
        foreach ( $usuario as $user ) {
            print_r(' ID: '.$user['id']. '  Nombre: '.$user['nombre']."<br>"); // o echo
            $edadjugadores[]= $user['edad'];
        }
        echo("------------------------------------------------------------------- <br>");
        foreach ($jugadoras as $jugadora){
            print_r(' ID: '.$jugadora['id']. ' |  Nombre: '.$jugadora['nombre'].
            ' | Apellido: '.$jugadora['apellido'].' | Club: '.$jugadora['club'].
            '<br>');
            $edadjugadoras[]= $jugadora['edad'];
        }
    // Calcular que tabla tiene mayor edad.
        function totalEdad($array){
            $res=0;
            foreach ($array as $array){
                $res = $res + $array;
            }
            return $res;
        }
        $edadjugadoras = totalEdad($edadjugadoras);
        $edadusers = totalEdad($usuario);
        echo ($edadjugadoras);
        echo ("/".$edadusers);
?>