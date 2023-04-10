<?php
//conexion con PDO
$connection = new PDO ("mysql:host=localhost", "root", "" );
echo "<pre>";
var_dump ($connection);
echo "</pre>";
?>