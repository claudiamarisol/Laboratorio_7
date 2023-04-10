<?php

$connection = mysqli_connect("localhost", "root", "", "Marisol" );
//
if (!$connection){
die("La conexion fallo: ".mysqli_connect_errot());
}
echo "Conectado exitosamente con procedimiento";
//cerrar la conexion
mysqli_close($connection);

?>