<?php
    //host,Base de datos,usuario,clave
    
    $username='root';
    $password='';
    // instanciar = inicializar
    // PDO para conectar en una base de datos
    $conex= new PDO('mysql:host=localhost;dbname=test',$username,$password);
    
?>