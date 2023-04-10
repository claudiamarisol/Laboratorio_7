<?php
//conexion con PDO
try{
$connection = new PDO ("mysql:host=localhost;dbname=Marisol", "root", "" );
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "conectado exitosamente con PDO";
}catch (PDOException $e){
    echo "La conexion fallo: ".$e->getMessage();
}

?>