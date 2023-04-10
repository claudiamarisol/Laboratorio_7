<?php
//cadena de conexion al servidor
$connection = mysqli_connect("localhost", "root", "", "Marisol" );
//para verificar algun error
if (!$connection){
die("La conexion fallo: ".$connection->connect_error());
}
echo "Conectado exitosamente con objetos";
//cerrar la conexion
mysqli_close($connection);

?>